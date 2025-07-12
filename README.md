# 🎓 Sistem Pendukung Keputusan Penerima Beasiswa - Metode SAW

Proyek ini merupakan sistem pendukung keputusan (SPK) berbasis web yang dibangun menggunakan **Laravel** dan **MySQL**, yang digunakan untuk membantu proses **perangkingan calon penerima beasiswa** secara objektif menggunakan metode **Simple Additive Weighting (SAW)**.

---

## 🧠 Tentang Proyek

Sistem ini dirancang untuk mempermudah dalam menentukan siapa saja calon penerima yang paling layak, berdasarkan berbagai parameter penilaian. Metode SAW digunakan untuk menghitung dan melakukan perangkingan berdasarkan nilai-nilai yang diberikan terhadap setiap kriteria.

---

## ⚙️ Teknologi yang Digunakan

-   🧱 **Laravel** (Backend Framework)
-   🐬 **MySQL** (Database)
-   🌐 **Blade, Bootstrap** (Frontend)
-   🧮 **Metode SAW (Simple Additive Weighting)**

---

## 📊 Kriteria Penilaian

Perhitungan dilakukan berdasarkan parameter berikut:

| Kriteria              | Tipe    |
| --------------------- | ------- |
| IPK                   | Benefit |
| Semester              | Benefit |
| Tanggungan            | Benefit |
| Usia                  | Cost    |
| Penghasilan Orang Tua | Cost    |

> **Benefit** = semakin besar nilai, semakin baik  
> **Cost** = semakin kecil nilai, semakin baik

---

## 🚀 Fitur Utama

-   ✅ Input dan manajemen data mahasiswa
-   ✅ Perhitungan otomatis menggunakan metode SAW
-   ✅ Perangkingan hasil

---

## 📸 Screenshot Tampilan

![Screenshot 1](/screenshots/baru_1.png)

![Screenshot 2](./screenshots/baru_2.png)

![Screenshot 3](./screenshots/baru_3.png)
