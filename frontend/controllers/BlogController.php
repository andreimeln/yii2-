<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Aneks;

/**
 * Blog controller
 */
class BlogController extends Controller
{

    public $layout = "blog.php";
    /**
     * @inheritdoc
     */
    public function behaviors()
    {	
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
	$title = 'Привет миру от Андрея Мельникова';
        return $this->render('index', [
		'caption' => $title		
	]);
    }

    public function actionHello()
    {


	$aneks = Aneks::find()->all();
/*
	$anek->text = 'Hello';
	if ($anek->save())
	{
		$title = 'OK';
	} else 
	{
		$title = 'Fail';
	}
*/
	$title = 'Hello!';
        return $this->render('feed', [
		'aneks' => $aneks		
	]);
    }
}

