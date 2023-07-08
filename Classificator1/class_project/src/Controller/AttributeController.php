<?php

namespace App\Controller;

use App\Entity\Sign;
use App\Service\Sign\SignService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SignController extends AbstractController
{
    /**
     * @var SignService
     */
    private SignService $signService;

    public function __construct(
        SignService $signService
    ) {
        $this->signService = $signService;
    }

    /**
     * @Route("/sign", name="print_sign")
     */
    public function printTable(): Response
    {
        $signSerialize = $this->signService->getSignSerialize();
        return $this->render('Sign/SignesTable.html.twig', [
            'title' => 'Просмотр признаков',
            'signs' => $signSerialize
        ]);
    }

    /**
     * @Route("/sign/add", name="app_sign_redirect")
     */
    public function addSign(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('type', ChoiceType::class, [
                'label' => 'Выберите тип признака, который хотите создать ',
                'choices' => [
                    'Размерный' => 1,
                    'Скалярный' => 2,
                    'Логический' => 3,
                ],
                'attr' => ['class' => "form-select"]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Выбрать тип признака',
                'attr' => ['class' => "btn btn-primary"]
            ]);
        $form = $form->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $id = $form->getData()['type'];
            return $this->redirectToRoute('add_sign', [
                'id' => $id
            ]);
        }
        return $this->renderForm('Sign/SignRedirect.html.twig', [
            'form' => $form,
            'title' => 'Добавить признак'
        ]);
    }

    /**
     * @Route("/sign/add/{id}", name="add_sign")
     */
    public function showAddSign(Request $request, int $id): ?Response
    {
        $form = $this->createFormBuilder()
            ->add('name', TextType::class, ['label' => 'Название признака ']);
        if ($id === 2) {
            $form->add('value', TextareaType::class, [
                'label' => 'Возможные значения(каждое значение с новой строки): ',
                'attr' => [
                    'style' => 'height: 500px, width: 500px'
                ]
            ]);
        }
        $form = $form->add('save', SubmitType::class, [
            'label' => 'Добавить признак',
            'attr' => ['class' => "btn btn-primary"]
        ])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = [];
            $name = $form->getData()['name'];
            switch ($id) {
                case 1:
                    $answer = $this->signService->addRazmerniy($name);
                    break;
                case 2:
                    $answer = $this->signService->addScalarniy($form->getData());
                    break;
                case 3:
                    $answer = $this->signService->addLogical($name);
                    break;
            }
            return $this->render('Answer.html.twig', [
                'title' => 'Добавить признак',
                'answer' => $answer
            ]);
        }
        return $this->renderForm('Sign/SignAdd.html.twig', [
                'form' => $form,
                'title' => 'Добавить признак',
                'id' => $id,
            ]
        );
    }

    /**
     * @Route("/sign/delete", name="delete_sign")
     */
    public function deleteSign(Request $request): Response
    {
        $signArray = $this->signService->prepareSignForDelete();
        $form = $this->createFormBuilder();
        $form->add('sign', ChoiceType::class, [
            'label' => 'Выберите признак',
            'choices' => $signArray,
            'attr' => ['class' => "form-select"]
        ]);
        $form->add('delete', SubmitType::class, [
            'label' => 'Удалить ',
            'attr' => ['class' => "btn btn-primary"]
        ]);
        $form = $form->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $id = $form->getData()['sign'];
            $answer = $this->signService->deleteSign($id);
            return $this->render('Answer.html.twig', [
                'title' => 'Удалить признак',
                'answer' => $answer
            ]);
        }
        return $this->renderForm('/Sign/SignDelete.html.twig', [
            'form' => $form,
            'title' => 'Удалить признаков',
        ]);
    }

    /**
     * @Route("/sign/update", name="sign_update")
     */
    public function getUpdatedSign(Request $request): Response
    {
        $signArray = $this->signService->prepareSignForDelete();
        $form = $this->createFormBuilder();
        $form->add('sign', ChoiceType::class, [
            'label' => 'Изменить признак',
            'choices' => $signArray,
            'attr' => ['class' => "form-select"]
        ]);
        $form->add('select', SubmitType::class, [
            'label' => 'Выбрать признак',
            'attr' => ['class' => "btn btn-primary"]
        ]);
        $form = $form->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $id = $form->getData()['sign'];
            return $this->redirectToRoute('sign_update_by_id', ['id' => $id]);
        }
        return $this->renderForm('genre/GenreDelete.html.twig', [
            'title' => 'Изменить признак',
            'form' => $form
        ]);
    }


    /**
     * @Route("/sign/update/{id}", name="sign_update_by_id")
     */
    public function updateSign(Request $request, int $id): Response
    {
        $signForGenre = $this->signService->getSignBind($id);
        $form = $this->createFormBuilder();
        $form->add('value', TextareaType::class, [
            'label' => 'Возможные значения(каждое значение с новой строки): ',

        ]);
        $form->add('type', ChoiceType::class, [
            'label' => 'Выберите тип признака, который хотите создать ',
            'choices' => [
                'Размерный' => 1,
                'Скалярный' => 2,
                'Логический' => 3,
            ],
            'attr' => ['class' => "form-select"]
        ]);
        $form->add('update', SubmitType::class, [
            'label' => 'Изменить',
            'attr' => ['class' => "btn btn-primary"]
        ]);
        $form = $form->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $this->signService->updateSign($id, $form->getData());
            return $this->render('Answer.html.twig', [
                'title' => 'Изменить жанр',
                'answer' => $answer
            ]);
        }
        return $this->renderForm('Sign/SignUpdate.html.twig', [
            'form' => $form,
//            'name' => $this->genreRepository->find($id)->getName(),
            'signs' => $signForGenre,
            'title' => 'Изменить жанр'
        ]);
    }
}