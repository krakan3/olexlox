<?php

/**
 * Контроллер общедоступных страниц.
 */

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
	public function indexAction()
	{
		$this->view->render('Главная страница');
	}
	public function aboutAction()
	{
		$this->view->render('Обо мне');
	}
	public function accountAction()
	{
		$this->view->render('аккаунт');
	}
	public function merchAction()
	{
		$this->view->render('Мерч');
	}
	public function categoryAction()
	{
		$this->view->render('Категория');
	}
		public function blogAction()
	{
		$this->view->render('Блог');
	}
}
