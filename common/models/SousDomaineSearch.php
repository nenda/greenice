<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SousDomaine;

/**
 * SousDomaineSearch represents the model behind the search form about `common\models\SousDomaine`.
 */
class SousDomaineSearch extends SousDomaine
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sous_dom', 'id_domaine'], 'integer'],
            [['nom', 'valide'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SousDomaine::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_sous_dom' => $this->id_sous_dom,
            'id_domaine' => $this->id_domaine,
        ]);

        $query->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'valide', $this->valide]);

        return $dataProvider;
    }
}
