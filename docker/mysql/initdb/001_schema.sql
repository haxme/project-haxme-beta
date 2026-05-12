CREATE DATABASE IF NOT EXISTS haxme CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE haxme;

CREATE TABLE IF NOT EXISTS hxm_members (
  member_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL DEFAULT '',
  email VARCHAR(150) NOT NULL DEFAULT '',
  joined INT UNSIGNED NOT NULL DEFAULT 0,
  member_login_key VARCHAR(64) NOT NULL DEFAULT '',
  password_hash VARCHAR(255) NOT NULL DEFAULT '',
  members_display_name VARCHAR(255) NOT NULL DEFAULT '',
  members_l_display_name VARCHAR(255) NOT NULL DEFAULT '',
  n1 INT NOT NULL DEFAULT 0,
  n2 INT NOT NULL DEFAULT 0,
  n3 INT NOT NULL DEFAULT 0,
  n4 INT NOT NULL DEFAULT 0,
  n5 INT NOT NULL DEFAULT 0,
  n6 INT NOT NULL DEFAULT 0,
  n7 INT NOT NULL DEFAULT 0,
  n8 INT NOT NULL DEFAULT 0,
  n9 INT NOT NULL DEFAULT 0,
  n10 INT NOT NULL DEFAULT 0,
  n11 INT NOT NULL DEFAULT 0,
  n12 INT NOT NULL DEFAULT 0,
  n13 INT NOT NULL DEFAULT 0,
  n14 INT NOT NULL DEFAULT 0,
  n15 INT NOT NULL DEFAULT 0,
  w1 INT NOT NULL DEFAULT 0,
  w2 INT NOT NULL DEFAULT 0,
  w3 INT NOT NULL DEFAULT 0,
  w4 INT NOT NULL DEFAULT 0,
  w5 INT NOT NULL DEFAULT 0,
  w6 INT NOT NULL DEFAULT 0,
  w7 INT NOT NULL DEFAULT 0,
  w8 INT NOT NULL DEFAULT 0,
  w9 INT NOT NULL DEFAULT 0,
  w10 INT NOT NULL DEFAULT 0,
  c1 INT NOT NULL DEFAULT 0,
  c2 INT NOT NULL DEFAULT 0,
  c3 INT NOT NULL DEFAULT 0,
  c4 INT NOT NULL DEFAULT 0,
  c5 INT NOT NULL DEFAULT 0,
  c6 INT NOT NULL DEFAULT 0,
  c7 INT NOT NULL DEFAULT 0,
  c8 INT NOT NULL DEFAULT 0,
  c9 INT NOT NULL DEFAULT 0,
  c10 INT NOT NULL DEFAULT 0,
  i1 INT NOT NULL DEFAULT 0,
  i2 INT NOT NULL DEFAULT 0,
  i3 INT NOT NULL DEFAULT 0,
  i4 INT NOT NULL DEFAULT 0,
  i5 INT NOT NULL DEFAULT 0,
  t1 INT DEFAULT NULL,
  t2 INT DEFAULT NULL,
  t3 INT DEFAULT NULL,
  t4 INT DEFAULT NULL,
  t5 INT DEFAULT NULL,
  subcount INT NOT NULL DEFAULT 0,
  onteam VARCHAR(10) NOT NULL DEFAULT 'no',
  istid INT NOT NULL DEFAULT 0,
  tuid VARCHAR(128) NOT NULL DEFAULT '',
  tboolean TINYINT(1) NOT NULL DEFAULT 0,
  tid INT NOT NULL DEFAULT 0,
  tname VARCHAR(255) NOT NULL DEFAULT '',
  tassignment INT DEFAULT NULL,
  hxm_score VARCHAR(40) NOT NULL DEFAULT '0',
  PRIMARY KEY (member_id),
  UNIQUE KEY hxm_members_name (name),
  KEY hxm_members_display (members_display_name),
  KEY hxm_members_tuid (tuid),
  KEY hxm_members_tname (tname)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS news_posts (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  post MEDIUMTEXT NOT NULL,
  date DATETIME NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS novice (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  difficulty VARCHAR(32) NOT NULL,
  content MEDIUMTEXT NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS web (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  difficulty VARCHAR(32) NOT NULL,
  content MEDIUMTEXT NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS insane (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  host VARCHAR(255) NOT NULL DEFAULT 'local',
  content MEDIUMTEXT NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS epaper (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  date VARCHAR(64) NOT NULL,
  paper MEDIUMTEXT NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS edownload (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  url MEDIUMTEXT NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS evideo (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  embed VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS codebaset (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  total INT UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS codebase (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  lang VARCHAR(32) NOT NULL,
  name VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  content MEDIUMTEXT NOT NULL,
  PRIMARY KEY (id),
  KEY codebase_lang (lang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS submissions (
  id INT UNSIGNED NOT NULL,
  cat VARCHAR(32) NOT NULL,
  author VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL,
  content MEDIUMTEXT,
  embed MEDIUMTEXT,
  url MEDIUMTEXT,
  `from` VARCHAR(255) NOT NULL DEFAULT '',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS security (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  lockdown TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO security (id, lockdown) VALUES (1, 0)
ON DUPLICATE KEY UPDATE lockdown = VALUES(lockdown);

INSERT INTO codebaset (id, total) VALUES (1, 0)
ON DUPLICATE KEY UPDATE total = VALUES(total);

INSERT INTO news_posts (id, title, author, post, date) VALUES
(1, 'Project HaxMe restored', 'cwade12c', 'This Docker reconstruction keeps the legacy HaxMe missions and stores progress in a standalone HaxMe database instead of IPB.', '2012-04-01 12:00:00')
ON DUPLICATE KEY UPDATE title = VALUES(title), author = VALUES(author), post = VALUES(post), date = VALUES(date);

INSERT INTO novice (id, name, author, difficulty, content) VALUES
(1, 'PlainSRC Password', 'cwade12c', '1/10', '<p>Find the login credentials hidden in the source and launch <a href="?p=novice&m=1">Novice 1</a>.</p>'),
(2, 'Crawling Our Way', 'cwade12c', '1/10', '<p>Use the clues left for crawlers and launch <a href="?p=novice&m=2">Novice 2</a>.</p>'),
(3, 'Javascript:Alert(''Login'')', 'cwade12c', '1/10', '<p>Inspect the client-side login logic and launch <a href="?p=novice&m=3">Novice 3</a>.</p>'),
(4, 'What''s your email?', 'cwade12c', '2/10', '<p>Investigate how the mission handles mail and launch <a href="?p=novice&m=4">Novice 4</a>.</p>'),
(5, 'Looking for "Gold"', 'cwade12c', '2/10', '<p>Search carefully for the required value and launch <a href="?p=novice&m=5">Novice 5</a>.</p>'),
(6, 'JavaBase', 'cwade12c', '2/10', '<p>Review the JavaScript included with the page and launch <a href="?p=novice&m=6">Novice 6</a>.</p>'),
(7, 'PHP Root Include', 'cwade12c', '3/10', '<p>Work through the included login frame and launch <a href="?p=novice&m=7">Novice 7</a>.</p>'),
(8, 'JavaBase', 'cwade12c', '3/10', '<p>Follow the JavaScript trail and launch <a href="?p=novice&m=8">Novice 8</a>.</p>'),
(9, 'Lets Get It!', 'cwade12c', '3/10', '<p>Use the bundled mission files and launch <a href="?p=novice&m=9">Novice 9</a>.</p>'),
(10, 'JavaBase', 'cwade12c', '4/10', '<p>Inspect the client-side login script and launch <a href="?p=novice&m=10">Novice 10</a>.</p>'),
(11, 'Encryption 2', 'cwade12c', '4/10', '<p>Reverse the encoded value and launch <a href="?p=novice&m=11">Novice 11</a>.</p>'),
(12, 'Encryption 3', 'cwade12c', '5/10', '<p>Reverse the encoded value and launch <a href="?p=novice&m=12">Novice 12</a>.</p>'),
(13, 'Milk N'' Cookies', 'cwade12c', '5/10', '<p>Use cookies to solve the challenge and launch <a href="?p=novice&m=13">Novice 13</a>.</p>'),
(14, 'I Hate The Doctor...', 'cwade12c', '6/10', '<p>Find the intended query and launch <a href="?p=novice&m=14">Novice 14</a>.</p>'),
(15, 'Far, Far Away', 'cwade12c', '6/10', '<p>Try each path through the mission and launch <a href="?p=novice&m=15">Novice 15</a>.</p>')
ON DUPLICATE KEY UPDATE name = VALUES(name), author = VALUES(author), difficulty = VALUES(difficulty), content = VALUES(content);

INSERT INTO web (id, name, author, difficulty, content) VALUES
(1, 'Grind Design', 'cwade12c', '4/10', '<p>Begin the Grind web challenge: <a href="?p=web&m=1">launch Web 1</a>.</p>'),
(2, 'Investive', 'cwade12c', '5/10', '<p>Begin the Investive web challenge: <a href="?p=web&m=2">launch Web 2</a>.</p>'),
(3, 'Fly Host', 'cwade12c', '5/10', '<p>Begin the Fly Host web challenge: <a href="?p=web&m=3">launch Web 3</a>.</p>'),
(4, 'FileFold', 'cwade12c', '6/10', '<p>Begin the FileFold web challenge: <a href="?p=web&m=4">launch Web 4</a>.</p>')
ON DUPLICATE KEY UPDATE name = VALUES(name), author = VALUES(author), difficulty = VALUES(difficulty), content = VALUES(content);

INSERT INTO insane (id, name, author, host, content) VALUES
(1, 'BrandAppz', 'cwade12c', 'local', '<p>Begin the BrandAppz challenge: <a href="?p=insane&m=1">launch Insane 1</a>.</p>')
ON DUPLICATE KEY UPDATE name = VALUES(name), author = VALUES(author), host = VALUES(host), content = VALUES(content);

INSERT INTO epaper (id, name, author, date, paper) VALUES
(1, 'HaxMe Open Source Restoration', 'cwade12c', '2012-04-01', '<h2>HaxMe Open Source Restoration</h2><p>This archive row exists so the legacy papers section works without importing forum/IPB data.</p>')
ON DUPLICATE KEY UPDATE name = VALUES(name), author = VALUES(author), date = VALUES(date), paper = VALUES(paper);

INSERT INTO edownload (id, name, author, url) VALUES
(1, 'HaxMe Source Archive', 'cwade12c', '<p>The restored source is bundled in this Docker image. Browse the Source and CodeBase sections from the navigation panel.</p>')
ON DUPLICATE KEY UPDATE name = VALUES(name), author = VALUES(author), url = VALUES(url);

INSERT INTO evideo (id, name, author, embed) VALUES
(1, 'HaxMe Video Placeholder', 'cwade12c', '00000000000')
ON DUPLICATE KEY UPDATE name = VALUES(name), author = VALUES(author), embed = VALUES(embed);

INSERT INTO codebase (id, lang, name, author, content) VALUES
(1, 'asm', 'Assembly placeholder', 'cwade12c', '<pre>; CodeBase data placeholder for restored HaxMe.</pre>'),
(2, 'basic', 'Basic placeholder', 'cwade12c', '<pre>PRINT "HaxMe"</pre>'),
(3, 'c', 'C placeholder', 'cwade12c', '<pre>#include &lt;stdio.h&gt;\nint main(void) { puts("HaxMe"); return 0; }</pre>'),
(4, 'html', 'HTML placeholder', 'cwade12c', '<pre>&lt;strong&gt;HaxMe&lt;/strong&gt;</pre>'),
(5, 'java', 'Java placeholder', 'cwade12c', '<pre>class HaxMe { public static void main(String[] args) {} }</pre>'),
(6, 'perl', 'Perl placeholder', 'cwade12c', '<pre>print "HaxMe\\n";</pre>'),
(7, 'php', 'PHP placeholder', 'cwade12c', '<pre>&lt;?php echo "HaxMe"; ?&gt;</pre>'),
(8, 'python', 'Python placeholder', 'cwade12c', '<pre>print("HaxMe")</pre>'),
(9, 'ruby', 'Ruby placeholder', 'cwade12c', '<pre>puts "HaxMe"</pre>')
ON DUPLICATE KEY UPDATE lang = VALUES(lang), name = VALUES(name), author = VALUES(author), content = VALUES(content);
