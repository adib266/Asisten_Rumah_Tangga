-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2023 pada 13.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_art`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bokings`
--

CREATE TABLE `bokings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pekerja` varchar(255) NOT NULL,
  `nama_majikan` varchar(255) NOT NULL,
  `nama_pekerja` varchar(255) NOT NULL,
  `jenis_art` varchar(255) NOT NULL,
  `tawar_gaji` int(11) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `acc` varchar(255) DEFAULT NULL,
  `awal_kontrak` date DEFAULT NULL,
  `akhir_kontrak` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bokings`
--

INSERT INTO `bokings` (`id`, `id_pekerja`, `nama_majikan`, `nama_pekerja`, `jenis_art`, `tawar_gaji`, `foto_ktp`, `acc`, `awal_kontrak`, `akhir_kontrak`, `created_at`, `updated_at`) VALUES
(1, '1', 'Melvin Zainul', 'Ulwan', 'Supir', 2000000, '', '1', '2023-06-28', '2023-06-29', '2023-06-22 10:27:08', '2023-06-22 10:27:08'),
(6, '2', 'Melvin Zainul', 'Supir Handal', 'Supir', 2000000, '', '0', '2023-06-28', '2023-06-30', '2023-06-28 01:38:19', '2023-06-28 01:38:19'),
(7, '3', 'Melvin Zainul', 'Ahmad', 'Supir', 2000000, '', '0', '2023-07-21', '2023-07-29', '2023-07-12 01:14:27', '2023-07-12 01:14:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_21_123508_create_pekerjaans_table', 1),
(6, '2023_05_13_121541_create_pekerjas_table', 1),
(7, '2023_05_13_122320_create_transactions_table', 1),
(8, '2023_05_13_122952_create_notes_table', 1),
(9, '2023_05_25_094038_create_bokings_table', 1),
(10, '2023_06_04_164049_create_uploads_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjas`
--

CREATE TABLE `pekerjas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_pekerjaans` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `no_wa` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `gaji` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerjas`
--

INSERT INTO `pekerjas` (`id`, `id_user`, `id_pekerjaans`, `nama`, `nik`, `ttl`, `alamat`, `desa`, `kecamatan`, `kode_pos`, `pekerjaan`, `pengalaman`, `no_hp`, `no_wa`, `deskripsi`, `foto`, `ktp`, `gaji`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Rian Pratama', 32298213123, '2023-06-05', 'Jl Mayjend Sutoyo No.28', 'Kagok', 'Slawi', 52411, 'Jenis Art', '2 Tahun', '085791154351', '08587127271236', 'tinggi 170', '_1689869202.jpg', '1687454776.jpg', 10000000, '1', '2023-06-22 10:26:16', '2023-07-20 09:06:42'),
(2, NULL, NULL, 'Supir Handal', 3229872150003, '2023-06-16', 'Jl Mayjend Sutoyo No.28', 'Pegirikan', 'Adiwerna', 52411, 'Supir', '2 Tahun', '085791154351', '085871272712', 'sudah Menikah dan Beranak 1', '1687774710.jpg', '1687774710.jpg', 10000000, '1', '2023-06-26 03:18:30', '2023-06-26 03:18:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pekerja` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `level` varchar(255) NOT NULL,
  `photo` text DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `ktp` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `phone`, `level`, `photo`, `nik`, `ktp`, `address`, `birthdate`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$5N87YdfTbDOsdhyRX9kIcuKFvzsmdMKE5AAk9q1qkgqLPemLN2Bfu', NULL, 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'Melvin Zainul  ', 'majikan@gmail.com', NULL, '$2y$10$jXDjzeDwrPYYmUILFQwAWuGwOyV28TrklotBwx8FGlhwC1M2pjNH6', NULL, 'Majikan', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 10:24:14', '2023-06-22 10:24:14'),
(3, NULL, 'Ulwan', 'pegawai@gmail.com', NULL, '$2y$10$tKPUaRZfZAbEeTnCdHEVv.5K7bIrqOJRjAOkdZ8jQ2YIrKsCJbmwa', NULL, 'Pegawai', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 10:24:26', '2023-06-22 10:24:26'),
(4, NULL, 'Supir Handal', 'supir@gamil.com', NULL, '$2y$10$Aid0sL.biXAT81QyOAGInOjs0sI5kLwevvo8KZXVUaxMdHok0Obpa', NULL, 'Pegawai', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-26 02:56:11', '2023-06-26 02:56:11'),
(5, NULL, 'Ahmad', 'amad@gmail.com', NULL, '$2y$10$bj3wlql0frAHCRCnlmYww..tcIXEF1FrAj77uDf.eoum4BpCc0HHW', NULL, 'Pegawai', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-28 01:40:36', '2023-06-28 01:40:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bokings`
--
ALTER TABLE `bokings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjas`
--
ALTER TABLE `pekerjas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bokings`
--
ALTER TABLE `bokings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pekerjas`
--
ALTER TABLE `pekerjas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
