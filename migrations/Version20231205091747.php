<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231205091747 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_my_avatar (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(64) NOT NULL, email VARCHAR(255) NOT NULL, picture_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE craft DROP FOREIGN KEY FK_F45C4A8487920A64');
        $this->addSql('ALTER TABLE has_role DROP FOREIGN KEY FK_A35513589E8BDC');
        $this->addSql('ALTER TABLE has_role DROP FOREIGN KEY FK_A35513579F37AE5');
        $this->addSql('ALTER TABLE item_group DROP FOREIGN KEY FK_47675F15B8ED205D');
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251EA545015');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649E836CCC8');
        $this->addSql('ALTER TABLE group_fragment DROP FOREIGN KEY FK_C29D5993AE8F35D2');
        $this->addSql('ALTER TABLE group_fragment DROP FOREIGN KEY FK_C29D5993CCF2FB2E');
        $this->addSql('DROP TABLE craft');
        $this->addSql('DROP TABLE has_role');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE item_group');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE group_fragment');
        $this->addSql('DROP TABLE role');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE craft (id INT AUTO_INCREMENT NOT NULL, id_result_id INT NOT NULL, date_creation DATE NOT NULL, UNIQUE INDEX UNIQ_F45C4A8487920A64 (id_result_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE has_role (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_role_id INT DEFAULT NULL, INDEX IDX_A35513589E8BDC (id_role_id), INDEX IDX_A35513579F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name_category VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE item_group (id INT AUTO_INCREMENT NOT NULL, id_craft_id INT NOT NULL, is_tool TINYINT(1) NOT NULL, INDEX IDX_47675F15B8ED205D (id_craft_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, id_category_id INT NOT NULL, name_item VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, last_edited DATE DEFAULT NULL, INDEX IDX_1F1B251EA545015 (id_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, craft_id INT DEFAULT NULL, login VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, picture_url VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_8D93D649E836CCC8 (craft_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE group_fragment (id INT AUTO_INCREMENT NOT NULL, id_group_id INT NOT NULL, id_item_id INT NOT NULL, stack INT NOT NULL, INDEX IDX_C29D5993CCF2FB2E (id_item_id), INDEX IDX_C29D5993AE8F35D2 (id_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name_role VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE craft ADD CONSTRAINT FK_F45C4A8487920A64 FOREIGN KEY (id_result_id) REFERENCES item (id)');
        $this->addSql('ALTER TABLE has_role ADD CONSTRAINT FK_A35513589E8BDC FOREIGN KEY (id_role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE has_role ADD CONSTRAINT FK_A35513579F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE item_group ADD CONSTRAINT FK_47675F15B8ED205D FOREIGN KEY (id_craft_id) REFERENCES craft (id)');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251EA545015 FOREIGN KEY (id_category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649E836CCC8 FOREIGN KEY (craft_id) REFERENCES craft (id)');
        $this->addSql('ALTER TABLE group_fragment ADD CONSTRAINT FK_C29D5993AE8F35D2 FOREIGN KEY (id_group_id) REFERENCES item_group (id)');
        $this->addSql('ALTER TABLE group_fragment ADD CONSTRAINT FK_C29D5993CCF2FB2E FOREIGN KEY (id_item_id) REFERENCES item (id)');
        $this->addSql('DROP TABLE user_my_avatar');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
