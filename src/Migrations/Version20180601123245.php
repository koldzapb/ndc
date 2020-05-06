<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180601123245 extends AbstractMigration
{
    public function up(Schema $schema):void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE usertouserlikes (user_source INT NOT NULL, user_target INT NOT NULL, INDEX IDX_49DB9FF53AD8644E (user_source), INDEX IDX_49DB9FF5233D34C1 (user_target), PRIMARY KEY(user_source, user_target)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_to_user_like (id INT AUTO_INCREMENT NOT NULL, userwholikesotheruser_id INT DEFAULT NULL, userslikedbythisuser_id INT DEFAULT NULL, INDEX IDX_678DA70981B6AD51 (userwholikesotheruser_id), INDEX IDX_678DA709D0BB6CCE (userslikedbythisuser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE usertouserlikes ADD CONSTRAINT FK_49DB9FF53AD8644E FOREIGN KEY (user_source) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE usertouserlikes ADD CONSTRAINT FK_49DB9FF5233D34C1 FOREIGN KEY (user_target) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_to_user_like ADD CONSTRAINT FK_678DA70981B6AD51 FOREIGN KEY (userwholikesotheruser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_to_user_like ADD CONSTRAINT FK_678DA709D0BB6CCE FOREIGN KEY (userslikedbythisuser_id) REFERENCES user (id)');
    }

    public function down(Schema $schema):void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE usertouserlikes');
        $this->addSql('DROP TABLE user_to_user_like');
    }
}
