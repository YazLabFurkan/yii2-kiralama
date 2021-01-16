# yii2-kiralama
Kiralama Modülü

# Hakkında
Bu modül aracılığıyla kiralama oluşturulabilir.

# Kurulum

Modül kurulumu vagrant ve yii2-advanced template'i üzerinden anlatılacaktır. Modül kurulumu için öncelikle vagrant üzerinde çalışan yii2-advanced kurulumunu gerçekleştiriniz.

ssh veya vagrant ssh ile vagrant üzerinde yii projenizin ana dizinine gidiniz.(Örneğin /var/www/advanced)

```
 composer require --prefer-dist mrpurposeless/yii2-kiralama "dev-main"
 ```

 komutu ile packagist üzerinden modül kurulumunu gerçekleştiriniz.
    
Daha sonrasında yii projenizin ana dizininde backend\config\main.php dosyasını düzenlemek için açınız. Aşağıda gösterildiği şekilde düzenlemeyi yapınız.

```
    'modules' => [
		'kiralama' => 
			[	
				'class' => 'mrpurposeless\kiralama\Module',
			],
	],

 ```

Modülün çalışabilmesi için son olarak migration işleminin gerçekleştirilmesi gereklidir.

ssh bağlantısı ile vagrant üzerinde proje ana dizinindeyken alttaki komut çalıştırılmalıdır.

```
    php yii migrate/up --migrationPath=@vendor/mrpurposeless/yii2-kiralama/src/migrations
 ```

 Artık migration işlemimiz gerçekleştirilmiştir. Modülümüz çalışır hale gelmiştir.

 Modülü test etmek için tarayıcınızda 

```
    siteAdresi/backend/web/index.php?r=kiralama/kiralama
```
 adresine gidiniz. Modül anasayfasını karşınızda göreceksiniz.




