<?php

namespace App\Controller;

use App\Entity\ApiEntity;
use App\Repository\ApiEntityRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/post', name: 'post')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

//    public function get_notes(Request $request)

    public function post(Request $request): Response {
        try {
            $request = $this->transformJsonBody($request);
            $apiEntity = new ApiEntity();
            $apiEntity->setName($request->get('name'));
            $apiEntity->setText($request->get('text'));
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($apiEntity);
            $manager->flush();
            $data = ['status'=>Response::HTTP_OK, 'answer'=>'success'];
            return $this->response($data);
        } catch (\Exception $exception) {
            $data = ['status'=>Response::HTTP_UNPROCESSABLE_ENTITY, 'answer'=>'sorry, wrong data'];
            return $this->response($data, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function delete(ApiEntityRepository $apiEntityRepository, $id): Response {
        $apiEntity = $apiEntityRepository->find($id);
        if (!$apiEntity) {
            http_response_code(422);

        }
    }

    private function transformJsonBody(Request $request): Request {
        $data = json_decode($request->getContent(), true);
        if ($data == null)
            return $request;
        $request->request->replace($data);
        return $request;
    }

    private function response($data, $status = Response::HTTP_OK, $headers = []): JsonResponse {
        return new JsonResponse($data, $status, $headers);
    }
}
