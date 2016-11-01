/*select table*/
USE blog;

/*drop table statements for dev process*/
DROP TABLE IF EXISTS blog_post;
DROP TABLE IF EXISTS users;


/*admin user table*/
CREATE TABLE users (
	user_id			INT 		PRIMARY KEY AUTO_INCREMENT,
	username		VARCHAR(25) NOT NULL,
	password		VARCHAR(40) NOT NULL,
	first_name		VARCHAR(25) NOT NULL,
	last_name		VARCHAR(25) NOT NULL,
	email			VARCHAR(35) NOT NULL,
	join_date		DATETIME DEFAULT CURRENT_TIMESTAMP,
	admin_access	TINYINT DEFAULT 0
);

/*blog post table*/
CREATE TABLE blog_post (
	post_id			INT		PRIMARY KEY 	AUTO_INCREMENT,
	user_id			INT,
	title			VARCHAR(250),
	description		TEXT,
	content			TEXT,
	post_date		DATE ,
	publish			TINYINT DEFAULT 0,
	publish_date	DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY (user_id) REFERENCES users (user_id)
);