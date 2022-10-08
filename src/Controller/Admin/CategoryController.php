<?php

namespace App\Controller\Admin;

use App\Entity\Website;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategoryController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return Website::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Website')
            ->setEntityLabelInPlural('Websites');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new("id")->hideOnForm(),
            TextField::new("name"),
            TextField::new("domain"),
            TextField::new("files_path")->setDisabled(true)->hideWhenCreating()
        ];
    }

    public function createEntity(string $entityFqcn)
    {
        $entity = new $entityFqcn();
        $entity->setFilesPath("/var/www/" . $entity->getName());
        return $entity;
    }

    /*#[Route('/', name: 'app_category_index', methods: ['GET'])]
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CategoryRepository $categoryRepository): Response
    {
        $category = new Category();
        if ($request->getMethod() == "POST") {
            $path = "/var/www/" . strtolower(str_replace(" ", "_", $request->get("name")));
            $category->setName($request->get("name"));
            $category->setFilesPath($path);
            $category->setDomain($request->get("domain"));

            $categoryRepository->add($category, true);

            shell_exec("cd ~ && mkdir /var/www/" . strtolower(str_replace(" ", "_", $request->get("name"))));
            shell_exec("sh " . PATH . "/install_site.sh " . $path . " " . $request->get("domain"));

            return $this->redirect('/dashboard?menuIndex=2&routeName=app_category_index&submenuIndex=-1');
        }

        return $this->render('category/new.html.twig', [
            'category' => $category,
        ]);
    }

    #[Route('/{id}', name: 'app_category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {
        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categoryRepository->add($category, true);

            return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('category/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_category_delete', methods: ['POST'])]
    public function delete(Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            $categoryRepository->remove($category, true);
        }

        return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
    }*/
}
