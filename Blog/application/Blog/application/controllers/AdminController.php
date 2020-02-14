<?php

/**
 * Контроллер страниц админки.
 */

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller
{
	public function __construct($route)
	{
		parent::__construct($route);
		$this->view->layout = 'admin';
	}

	public function loginAction()
	{
		$this->view->render('Страница входа');
	}
	public function logoutAction()
	{
		exit("Выход");
	}
	public function addAction()
	{
		$this->view->render('Добавить пост');
	}
	public function editAction()
	{
		$this->view->render('Редактировать пост');
	} 
	public function deleteAction()
	{
		exit("Удаление");
	}

}