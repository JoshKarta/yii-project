$countries = new Countries();
$samplicious = new Samplicious();
$users = new Users();

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            if ($countries->load(Yii::$app->request->post()) && $countries->save() && $samplicious->load(Yii::$app->request->post()) && $samplicious->save()) {
                return [
                    'data' => [
                        'success' => true,
                        'model' => $countries,
                        'message' => 'Country saved',
                    ],
                    'code' => 0,
                    'data' => [
                        'success' => true,
                        'model' => $samplicious,
                        'message' => 'Samplicious saved',
                    ],
                    'code' => 0,
                ];
            } else {
                return [
                    'data' => [
                        'success' => false,
                        'model' => null,
                        'message' => 'An error occured.',
                    ],
                    'code' => 1, // Some semantic codes that you know them for yourself
                ];
            }
        }
