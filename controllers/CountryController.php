<?php
/**
 * author: zly
 * Date: 2018/5/4
 * //命名空间必须在第一行，注释除外
 */

namespace app\controllers;


use app\models\Country;
use yii\base\Controller;
use yii\data\Pagination;//分页

class CountryController extends Controller {
    public function actionIndex() {
        $query = Country::find();
        //分页类信息
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount'      => $query->count(),
        ]);
        //国家信息
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        
        return $this->render('index', [
            'countries'  => $countries,
            'pagination' => $pagination,
        ]);
    }
}