## Relasi

---

- [Relasi](#section-1)
- [Factory](#section-2)
- [Seeder](#section-3)


<a name="section-1"></a>
## Relasi

Melihat Data

php artisan tinker
App\User::with('Blogs')->get()

Hasilnya:

all: [
       App\User {#3435
         id: 1,
         nama: "Darmawan",
         email: "darmawan@gmail.com",
         telepon: "085729891118",
         alamat: "Yogyakarta",
         tanggal_lahir: "2020-07-20 09:53:02",
         gender: "L",
         agama: "islam",
         created_at: null,
         updated_at: null,
         deleted_at: null,
         Blogs: Illuminate\Database\Eloquent\Collection {#3841
           all: [],
         },
       },
       App\User {#3803
         id: 2,
         nama: "Budi",
         email: "budi@gmail.com",
         telepon: "085729891118",
         alamat: "Yogyakarta",
         tanggal_lahir: "2020-07-20 09:53:02",
         gender: "L",
         agama: "islam",
         created_at: null,
         updated_at: null,
         deleted_at: null,
         Blogs: Illuminate\Database\Eloquent\Collection {#4053
           all: [],
         },
       },
       App\User {#4050
         id: 3,
         nama: "Tyo",
         email: "tyo@gmail.com",
         telepon: "085729891118",
         alamat: "Yogyakarta",
         tanggal_lahir: "2020-07-20 09:53:02",
         gender: "L",
         agama: "islam",
         created_at: null,
         updated_at: null,
         deleted_at: null,
         Blogs: Illuminate\Database\Eloquent\Collection {#4051
           all: [],
         },
       },
     ],
   }

   TODO Tree
   sebelum menulis harus diawali TODO