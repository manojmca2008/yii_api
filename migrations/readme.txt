Migrations : 
With our config option in place, we can now create a migration for our database. From your command line run and type yes at the prompt.

php yii migrate/create posts
Your output should look as follows:

Yii Migration Tool (based on Yii v2.0.0-dev)

Create new migration '/var/www/.../migrations/m131220_164042_posts.php'? (yes|no) [no]:yes
New migration created successfully.
The migrations in Yii 2 haven't changed much since Yii 1. Replace the up() and down method with the following respectively:

public function up(){
    $sql = "CREATE TABLE `client_details` (
            `id` int(11) NOT NULL,
            `name` varchar(256) NOT NULL,
            `address` varchar(256) NOT NULL,
            `phone_no` varchar(20) NOT NULL,
            `email` varchar(30) NOT NULL,
            `website_url` varchar(256) NOT NULL,
            `pan_no` varchar(256) NOT NULL,
            `gst_no` varchar(256) NOT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
    return $this->execute($sql);
}

public function down()
{
    return $this->dropTable('posts');
}
From the command line you can now create the database using the migrate/up command

php yii migrate/up --interactive=0
Which should give you the following output:

Yii Migration Tool (based on Yii v2.0.0-dev)

Total 1 new migration to be applied:
    m131220_164042_posts

*** applying m131220_164042_posts
    > create table posts ... done (time: 0.056s)
*** applied m131220_164042_posts (time: 0.093s)


Migrated up successfully.
migrate/down will drop the table. Feel free to bring the database up and down to explore some.