<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Model\User;

class Controller extends BaseController
{
    /**
     * Admin login
     */
    public function adminLogin()
    {
        if ($this->request->getMethod() === 'post'){
         $email = $this->request->getPost('email');
         $password = $this->request->getPost('password');
         $user = new user();
         $adminUser = $user->where('email', $email)->first();
         if ($adminUser && password_verify($password, $adminUser['password'])) {
            return redirect()->to('admin/dashboard');
         }
        }
         return view('admin/login');
    }

    /**
     * Admin dashboard
     *
     * @return string
     */
    public function index(): string
    {
        return view('admin/dashboard');
    }


    /**
     * Update application logo
     *
     * @return boolean
     */
    public function updateApplicationLogo(): bool
    {

    }

    /**
     * Add blog to blog list
     *
     * @return void
     */
    public function addBlogs()
    {

    }

    /**
     * Admin view blog list
     *
     * @return void
     */
    public function viewBlogs()
    {

    }

    /**
     * Delete blog according to ID
     *
     * @param [type] $blogId
     * @return void
     */
    public function delBlog($blogId)
    {

    }

    /**
     * Update title [About me, Contact us, Announcement, Privacy policy]
     *
     * @param [type] $title
     * @return void
     */
    public function updateTitleContent($title)
    {

    }

    /**
     * Admin logout attempt
     *
     * @return void
     */
    public function adminLogout()
    {
        session()->destroy();
        return redirect()->to('admin/login');
    }

    public function adminForgotPassword()
    {
        return view('admin/forgot-password');
    }
}
