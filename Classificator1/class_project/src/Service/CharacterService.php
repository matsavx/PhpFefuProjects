<?php

namespace App\Service;

use App\Entity\Character;
use App\Entity\CharacterAttributeValue;
use App\Entity\AttributeValue;
use App\Repository\CharacterRepository;
use App\Repository\CharacterAttributeValueRepository;
use App\Repository\AttributeValueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;

class CharacterService
{

    private CharacterRepository $genreRepository;

    private EntityManagerInterface $entityManager;

    private CharacterAttributeValueRepository $genreSignBindRepository;

    private AttributeValueRepository $signBindRepository;

    public function __construct(
        CharacterRepository $genreRepository,
        EntityManagerInterface $entityManager,
        CharacterAttributeValueRepository $genreSignBindRepository,
        AttributeValueRepository $signBindRepository
    ) {
        $this->genreRepository = $genreRepository;
        $this->entityManager = $entityManager;
        $this->genreSignBindRepository = $genreSignBindRepository;
        $this->signBindRepository = $signBindRepository;
    }

    public function updateGenre(int $id, array $formData): array
    {
        if (count($formData) === 0) {
            return [
                'title' => 'Изменение жанра',
                'message' => 'У жанра должен быть хотя бы один признак!'
            ];
        }
        $genre = $this->genreRepository->find($id);
        $genreSignBind = $this->genreSignBindRepository->findBy(['genre' => $genre]);
        foreach ($genreSignBind as $item) {
            $this->genreSignBindRepository->remove($item, false);
        }
        $this->genreSignBindRepository->flushAll();
        foreach ($formData as $item) {
            $genreSignBindNew = new CharacterAttributeValue();
            $signBind = $this->signBindRepository->find($item);
            $genreSignBindNew->setCharacter($genre);
            $genreSignBindNew->setAttributeValue($signBind);
            $this->genreSignBindRepository->add($genreSignBindNew);
        }
        return [
            'title' => 'Изменение жанра',
            'message' => 'Жанр ' . $genre->getCharacterName() . ' успешно изменен!'
        ];
    }

    public function addNewGenre(array $formData): array
    {
        if (count($formData) === 0) {
            return [
                'title' => 'Добавление жанра',
                'message' => 'У жанра должен быть хотя бы один признак!'
            ];
        }
        $name = $formData[0];
        if (empty($name)) {
            return [
                'title' => 'Добавление жанра',
                'message' => 'Имя не должно начинаться с пробела!'
            ];
        }

        $genreDuplicate = $this->genreRepository->findOneBy(['name' => $name]);
        if ($genreDuplicate) {
            return [
                'title' => 'Добавление жанра',
                'message' => 'Жанра с таким именем уже существует!'
            ];
        }
        $genre = new Character();
        $genre->setCharacterName($name);
        $this->genreRepository->add($genre);
        unset(
            $formData[0]
        );
        foreach ($formData as $item) {
            $signBind = $this->entityManager->getReference(AttributeValue::class, $item);
            $genreSignBind = new CharacterAttributeValue();
            $genreSignBind->setCharacter($genre);
            $genreSignBind->setAttributeValue($signBind);
            $this->genreSignBindRepository->add($genreSignBind, false);
        }
        $this->genreSignBindRepository->flushAll();
        return [
            'title' => 'Добавление жанра',
            'message' => 'Жанр ' . $name . ' успешно добавлен!'
        ];
    }

    public function getAllGenres(): array
    {
        $genres = $this->genreRepository->findAll();
        $tmp = [];
        foreach ($genres as $genre) {
            $genreSignBinds = $this->genreSignBindRepository->findBy(['genre' => $genre]);
            $bindSerialize = [];
            foreach ($genreSignBinds as $genreSignBind) {
                $genreSignBindSerialize = $genreSignBind->getAttributeValue();
                $bindSerialize [] = [
                    'name' => $genreSignBindSerialize->getAttribute()->getAttributeName(),
                    'value' => $genreSignBindSerialize->getValue()
                ];

            }
            $tmp[] = [
                'name' => $genre->getCharacterName(),
                'value' => $bindSerialize
            ];
        }
        return $tmp;
    }

    public function prepareGenreForDelete(): array
    {
        $genres = $this->genreRepository->findAll();
        $tmp = [];
        foreach ($genres as $genre) {
            $tmp[$genre->getCharacterName()] = (int)$genre->getId();
        }
        return $tmp;
    }

    public function deleteGenre(int $id): array
    {
        $genre = $this->genreRepository->find($id);
        $genreSignBind = $this->genreSignBindRepository->findBy(['genre' => $genre]);
        foreach ($genreSignBind as $item) {
            $this->genreSignBindRepository->remove($item, false);
        }
        $this->genreSignBindRepository->flushAll();
        $this->genreRepository->remove($genre);
        return [
            'title' => 'Удаление жанра',
            'message' => 'Жанр ' . $genre->getCharacterName() . ' успешно удален!'
        ];
    }

    public function getSignForGenre(int $id): array
    {
        $genre = $this->genreRepository->find($id);
        $genreSignBinds = $this->genreSignBindRepository->findBy(['genre' => $genre]);
        $bindSerialize = [];
        foreach ($genreSignBinds as $genreSignBind) {
            $genreSignBindSerialize = $genreSignBind->getAttributeValue();
            $bindSerialize [] = [
                'name' => $genreSignBindSerialize->getAttribute()->getAttributeName(),
                'value' => $genreSignBindSerialize->getValue()
            ];

        }
        return $bindSerialize;
    }
}