<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Website;
use App\Controller\Admin\UserCrudController;
use App\Controller\Admin\CategoryController;
use App\Controller\WebsitesController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\UX\Chartjs\Model\Chart;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {

        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect("/");
        }

        return $this->render("admin/dashboard.html.twig", [
            "username" => $user->getUsername(),
            "website_name" => "Dev"
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle(WEBSITE_NAME);
    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setName($user->getUsername())
            ->displayUserName(true)
            ->displayUserAvatar(true)
            ->addMenuItems([
                MenuItem::linkToRoute('My Profile', 'fa fa-id-card', '...', ['...' => '...']),
                MenuItem::linkToRoute('Settings', 'fa fa-user-cog', '...', ['...' => '...']),
                MenuItem::section(),
                MenuItem::linkToRoute('Connections', "fa-solid fa-globe", "...", ["..." => "..."])
            ]);
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section("Administration\n━━━━━━━━━━━━━━━━");
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class)
            ->setController(UserCrudController::class);
        yield MenuItem::linkToCrud("Websites", "fa-solid fa-globe", Website::class)
            ->setController(CategoryController::class);
    }
}
