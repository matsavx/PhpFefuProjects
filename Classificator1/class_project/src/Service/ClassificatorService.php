<?php

namespace App\Service;


use App\Repository\CharacterRepository;
use App\Repository\CharacterAttributeValueRepository;
use App\Repository\AttributeValueRepository;
use App\Repository\AttributeRepository;

class ClassificatorService
{

    /**
     * @var AttributeRepository
     */
    private AttributeRepository $signRepository;

    /**
     * @var AttributeValueRepository
     */
    private AttributeValueRepository $signBindRepository;

    /**
     * @var CharacterAttributeValueRepository
     */
    private CharacterAttributeValueRepository $genreSignBindRepository;

    /**
     * @var CharacterRepository
     */
    private CharacterRepository $genreRepository;

    public function __construct(
        AttributeRepository $signRepository,
        AttributeValueRepository $signBindRepository,
        CharacterAttributeValueRepository $genreSignBindRepository,
        CharacterRepository $genreRepository
    ) {
        $this->signRepository = $signRepository;
        $this->signBindRepository = $signBindRepository;
        $this->genreSignBindRepository = $genreSignBindRepository;
        $this->genreRepository = $genreRepository;
    }

    /**
     * Классифицирует жанр
     * @param array $signBinds
     * @return array
     */
    public function getClassification(array $signBinds): array
    {
        $signBinds = $this->removeNullValue($signBinds);
        if (count($signBinds) === 0) {
            return [
                'error' => true,
                'possible_genre' => [],
                'message' => 'Не введен ни один признак!'
            ];
        }

        $genreSignBinds = $this->getGenreSignBindArray();

        $tmp2 = [];
        foreach ($genreSignBinds as $genreSignBind) {
            $tmp2[] = [
                'characterName' => $genreSignBind['name'],
                'intersect' => array_diff($signBinds, $genreSignBind['signBind']),
            ];
        }

        /** если только одно значение */
        return [
            'error' => false,
            'possible_genre' => $this->onlyOne($tmp2),
            'message' => null
        ];
    }

    private function onlyOne(array $intersect): array
    {
        $tmp = [];
        foreach ($intersect as $item) {
            if (count($item['intersect']) === 0) {
                $tmp[] = [
                    'name' => $item['name']
                ];
            }
        }
        return $tmp;
    }

    /**
     * Возвращает массив для формирования формы
     * @return array
     */
    public function prepareSignBindToForm(): array
    {
        $signs = $this->signRepository->findAll();
        $signSerialize = [];
        foreach ($signs as $sign) {
            $signBinds = $this->signBindRepository->findBy(['attribute' => $sign]);
            $bindSerialize = [-1 => 'Не определено'];
            foreach ($signBinds as $signBind) {
                $bindSerialize[$signBind->getId()] = $signBind->getValue();
            }
            $bindSerialize = array_flip($bindSerialize);
            $signSerialize[] = [
                'attributeName' => $sign->getAttributeName(),
                'value' => $bindSerialize,
            ];
        }
        return $signSerialize;
    }

    /**
     * Убирает неопределенные признаки из массива
     * @param array $signBinds
     * @return array
     */
    public function removeNullValue(array $signBinds): array
    {
        $tmp = [];
        foreach ($signBinds as $signBind) {
            if ($signBind !== -1) {
                $tmp[] = $signBind;
            }
        }
        return $tmp;
    }

    /**
     * Возвращает ассоциативный массив жанр => [айди значений]
     * @return array
     */
    private function getGenreSignBindArray(): array
    {
        $genres = $this->genreRepository->findAll();
        $genreSignBind = [];
        foreach ($genres as $genre) {
            $genreSigns = $this->genreSignBindRepository->findBy(['genre' => $genre]);
            $tmp = [];
            foreach ($genreSigns as $genreSign) {
                $tmp[] = $genreSign->getAttributeValue()->getId();
            }
            $genreSignBind[] = [
                'characterName' => $genre->getCharacterName(),
                'attributeValue' => $tmp
            ];
        }
        return $genreSignBind;
    }
}