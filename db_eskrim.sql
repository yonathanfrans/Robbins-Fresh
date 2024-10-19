-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2024 pada 13.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eskrim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `eskrim`
--

CREATE TABLE `eskrim` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `eskrim`
--

INSERT INTO `eskrim` (`id`, `kategori_id`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 1, 'Chocolate Ice Cream', 9000, 'a chocolate flavoured ice cream cone with caramel topping', 'uploads/chocolate-cone.png'),
(2, 1, 'Cone of Happiness', 12000, 'an ice cream cone menu designed to provide an enjoyable experience for customers', 'uploads/Cone-of-Happiness.png'),
(3, 1, 'Cone of Dreams', 14000, 'The ice cream cone menu is designed to provide a special experience for customers', 'uploads/Cone/cone_2.png'),
(4, 1, 'Cone of Adventure', 11000, 'The soft serve ice cream is served in a unique and attractive cone, and comes with unusual toppings.', 'uploads/Cone/cone_3.png'),
(5, 1, 'Cone of Celebration', 12000, 'The soft serve ice cream is served in a large, crispy cone and comes with an abundance of toppings', 'uploads/Cone/cone_4.png'),
(6, 2, 'Stick of Happiness', 10000, 'Strawberry-flavored ice cream bars served in attractive packaging', 'uploads/Stick/stick_1.png'),
(7, 2, 'Stick of Dreams', 13000, 'The oreo-flavored ice cream bars are presented in unique and attractive packaging', 'uploads/Stick/stick_2.png'),
(8, 2, 'Stick of Adventure', 11000, 'Ice cream bars with unique and interesting flavors, such as rose, lavender, or ginger, are presented in attractive packaging', 'uploads/Stick/stick_3.png'),
(9, 2, 'Stick of Celebration', 14000, 'Ice cream bars in chocolate, vanilla and strawberry flavors, presented in festive and attractive packaging.', 'uploads/Stick/stick_4.png'),
(10, 3, 'Scoop of Happiness', 10000, 'A medium-sized scoop of ice cream in chocolate, vanilla or strawberry flavours, served with a crispy', 'uploads/scoop/cup_1.png'),
(11, 3, 'Scoop of Dreams', 11000, 'A medium-sized scoop of ice cream in oreo, matcha or durian flavours, served with a crispy cone and your choice of toppings of choice', 'uploads/scoop/cup_2.png'),
(12, 3, 'Scoop of Adventure', 13000, 'Large scoops of ice cream with unique and interesting flavors, such as rose, lavender or ginger, served with crispy cones and generous toppings', 'uploads/scoop/cup_3.png'),
(13, 3, 'Scoop of Celebration', 15000, 'Extra-large scoops of ice cream in chocolate, vanilla and strawberry flavours, served with crunchy cones and festive toppings such as sprinkles, whipped cream and fruits.', 'uploads/scoop/cup_4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Ice Cream Cone'),
(2, 'Ice Cream Stick'),
(3, 'Ice Cream Cup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `size` varchar(5) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` decimal(7,2) DEFAULT NULL,
  `metode_pembayaran` varchar(10) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(1, 'test123@gmail.com', 'testuser', 'tes12345'),
(2, 'yonatanfrans07@gmail.com', 'yonathanfrans', 'yonathan'),
(3, 'tribagas@gmail.com', 'tribagas', '132');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `eskrim`
--
ALTER TABLE `eskrim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `eskrim`
--
ALTER TABLE `eskrim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `eskrim`
--
ALTER TABLE `eskrim`
  ADD CONSTRAINT `eskrim_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
