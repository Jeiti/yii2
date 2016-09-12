<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\News;

class NewsController extends Controller
{
    public function actionIndex($id=2, $message='news'){
        return $this->render('index',[
            'news_id'=>$id,
            'name' => $message
        ]);
    }

    public function actionCreate(){
        $news = new News();
        $news->title = '123';
        $news->content = '555';
        $news->save();
    }
}

//TODO: Настроить ЧПУ ссылки
//TODO: Вывести список новостей из базы в actionIndex