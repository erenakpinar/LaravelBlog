# Laravel Blog
## Database

###author table <br>
id int not null PK<br>
username varchar(30)<br>
first_name varchar(30)<br>
last_name varchar(30)<br>
email varchar(50)<br>

###category table <br>
id int not null PK <br> 
name varchar(30)

###post table <br>
id int not null PK<br>
name varchar(200) <br>
content varchar <br>
header_img varchar(200) <br>
publish_date timestamp <br>
created_date timestamp <br>
status varchar(20) <br>
author_id int <br>
seo_url varchar(200) unique