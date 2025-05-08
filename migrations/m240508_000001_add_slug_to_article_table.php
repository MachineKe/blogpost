<?php

use yii\db\Migration;

/**
 * Handles adding slug column to table `{{%article}}`.
 */
class m240508_000001_add_slug_to_article_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%article}}', 'slug', $this->string(1024)->notNull()->unique()->after('title'));
    }

    public function safeDown()
    {
        $this->dropColumn('{{%article}}', 'slug');
    }
}
