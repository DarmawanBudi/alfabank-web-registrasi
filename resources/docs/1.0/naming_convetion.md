##Naming convention

naming convetion untuk migration

memnuat tabel baru
`create_nama-tabelmu_apa_pake-plurals_table`
contoh:
Users
`php artisan make:migration create_users_table`

menambahkan foreign key
`add_foreign_key_to_nama_tabel_table`

contoh menambahkan foreign key bernama id_user kepada blog tabel
`php artisan make:migration add_foreign_key_to_blogs_table`

## naming cinvention buat controller
contoh:
BlogController, AuthController, UserController
penamaannya disebut dengan `PascalCase`

## naming cinvention buat model
contoh:
User, Blog, ProgramKursus, Admin

ingat,penamaanya tunggal bukan jamak

## naming convention nama attribut tabel
post_blody, id, create_at

primary key
normalnya bernama id

foreign key
comment_id, user_id

note:
`PascalCase`    : LandingPageController
`camelCase`     : digunakan untuk menamai function atau method misal `showInbox()`
`kebab-case`    : ini-contoh