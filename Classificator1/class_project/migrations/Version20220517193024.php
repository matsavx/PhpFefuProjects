<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220517193024 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attribute (id INT AUTO_INCREMENT NOT NULL, attribute_name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE attribute_value (id INT AUTO_INCREMENT NOT NULL, attribute_id INT DEFAULT NULL, value VARCHAR(255) DEFAULT NULL, INDEX IDX_FE4FBB82B6E62EFA (attribute_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `character` (id INT AUTO_INCREMENT NOT NULL, character_name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE character_attribute_value (id INT AUTO_INCREMENT NOT NULL, character_id INT DEFAULT NULL, attribute_value_id INT DEFAULT NULL, INDEX IDX_B56282BD1136BE75 (character_id), INDEX IDX_B56282BD65A22152 (attribute_value_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE attribute_value ADD CONSTRAINT FK_FE4FBB82B6E62EFA FOREIGN KEY (attribute_id) REFERENCES attribute (id)');
        $this->addSql('ALTER TABLE character_attribute_value ADD CONSTRAINT FK_B56282BD1136BE75 FOREIGN KEY (character_id) REFERENCES `character` (id)');
        $this->addSql('ALTER TABLE character_attribute_value ADD CONSTRAINT FK_B56282BD65A22152 FOREIGN KEY (attribute_value_id) REFERENCES attribute_value (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attribute_value DROP FOREIGN KEY FK_FE4FBB82B6E62EFA');
        $this->addSql('ALTER TABLE character_attribute_value DROP FOREIGN KEY FK_B56282BD65A22152');
        $this->addSql('ALTER TABLE character_attribute_value DROP FOREIGN KEY FK_B56282BD1136BE75');
        $this->addSql('DROP TABLE attribute');
        $this->addSql('DROP TABLE attribute_value');
        $this->addSql('DROP TABLE `character`');
        $this->addSql('DROP TABLE character_attribute_value');
    }
}
