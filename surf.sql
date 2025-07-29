-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2025 pada 14.09
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_adminteampalsurfl@gmail.com|127.0.0.1', 'i:1;', 1753194028),
('laravel_cache_adminteampalsurfl@gmail.com|127.0.0.1:timer', 'i:1753194028;', 1753194028),
('laravel_cache_adminteampalsurflesso@gmail.com|127.0.0.1', 'i:1;', 1752481552),
('laravel_cache_adminteampalsurflesso@gmail.com|127.0.0.1:timer', 'i:1752481552;', 1752481552),
('laravel_cache_teampalsurflesso@gmail.com|127.0.0.1', 'i:1;', 1752481538),
('laravel_cache_teampalsurflesso@gmail.com|127.0.0.1:timer', 'i:1752481538;', 1752481538);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_islands`
--

CREATE TABLE `category_islands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_islands`
--

INSERT INTO `category_islands` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Sumatera Selatan', 'sumatera-selatan', '2025-07-07 21:52:34', '2025-07-07 21:52:34'),
(2, 'Aceh', 'aceh', '2025-07-07 22:18:31', '2025-07-07 22:18:31'),
(8, 'Bengkulu', 'bengkulu', '2025-07-07 22:19:31', '2025-07-07 22:19:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_lessons`
--

CREATE TABLE `category_lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_lessons`
--

INSERT INTO `category_lessons` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Intermediate Class', 'intermediate-class', '2025-07-07 22:17:54', '2025-07-07 22:17:54'),
(2, 'Beginner Class', 'beginner-class', '2025-07-07 22:18:16', '2025-07-07 22:18:16'),
(3, 'Longboard Class', 'longboard-class', '2025-07-07 22:18:22', '2025-07-07 22:18:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_management`
--

CREATE TABLE `content_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content_body` longtext DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `content_management`
--

INSERT INTO `content_management` (`id`, `section_name`, `title`, `content_body`, `image_path`, `created_at`, `updated_at`) VALUES
(2, 'Quote', 'Welcome To Teampal Surf', 'As a proudly 100% Indonesian team, we deeply value the importance of focusing on local potential from quality and atmosphere to a strong connection with nature and community. These values represent the true spirit of Bali and Indonesia.\r\n\r\nWe are passionate about sharing our experiences and learning together with you. Join us in discovering balance and joy through the wonderful world of surfing.\r\n\r\nWe look forward to meeting you, helping you improve your surfing skills, and catching your very first wave. Even when the ocean feels powerful and intimidating, we’ll be right there with you encouraging and guiding you with a cheerful spirit to have fun and enjoy the ride.', 'content_images/fF1VGEHES3wKyxoadBFOHdqSpCfGqtaSQYVGcVCr.jpg', '2025-07-08 01:02:44', '2025-07-20 04:53:44'),
(4, 'About', 'The Heart Behind the Waves', 'Jumon Born and raised in North Sumatra, Indonesia, Jumon is more than just the founder and head coach—he’s the soul of our surf community. With the warmth of his roots and a deep love for the ocean, Jumon brings passion, patience, and positivity into every lesson.\r\n\r\nSince moving to Bali in 2018, he’s been captivated by the island’s beauty and vibrant surf culture. His first ride from his friend wasn’t just memorable—it was life-changing. That moment sparked a mission: to share the joy of surfing with others.\r\n\r\nFor Jumon, surfing is more than a sport. It’s a way of life. A daily ritual. A source of balance, freedom, and connection. Whether you’re catching your first wave or chasing your next one, he’s here to guide you—not just on the board, but in embracing the energy of the ocean.', 'content_images/CEfywOVTRL3nODLfZfDRp1NUgJbr9Pa388X8iMvt.jpg', '2025-07-14 07:58:32', '2025-07-20 05:29:11');

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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_02_062234_create_category_lessons_table', 1),
(5, '2025_07_02_072633_create_surf_lessons_table', 1),
(6, '2025_07_06_155807_create_content_management_table', 1),
(7, '2025_07_07_140600_create_category_islands_table', 1),
(8, '2025_07_07_140601_create_surf_trips_table', 1),
(9, '2025_07_09_151853_create_reviews_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL DEFAULT 5,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `title`, `message`, `rating`, `is_featured`, `created_at`, `updated_at`) VALUES
(2, 'Blust', 'Very satisfactory', 'We had an amazing experience with Teampal Surf during our time! We, our 4-year-old, and our 10-year-old were all beginners and surfed with Teampal many times. Jumon and his team were amazing, and I couldn\'t believe how safe, supported, and confident our kids felt in the water with Teampal. The location was perfect—beautiful, uncrowded, and the atmosphere was very relaxed. Everyone was well-organized and friendly. And be sure to finish your surf with a fresh coconut at the Cafe.', 5, 0, '2025-07-09 08:50:04', '2025-07-09 08:50:04'),
(33, 'Cecilals', 'Very Satisfactory', 'First experience surfing and I had the best moment in Bali ! I really recommend taking surf lesson with Jumon, you’ll have fun and get quick skills ;)', 5, 0, '2025-07-14 08:14:10', '2025-07-14 08:14:10'),
(34, 'Chiara Cataldo', 'Very Satisfactory', 'My experience with Jumon was fantastic. My boyfriend and I booked a private lesson, and even though we were beginners, he explained all the basic concepts very clearly. After a few minutes of explanation on land (how to position yourself on the board, how to behave in the water, where to wait for the waves), he immediately took us into the water to put the theory into practice.\r\n\r\nHe helped us catch the waves, and we even managed to ride a few, despite it being our first day.\r\n\r\nWe had so much fun that we booked another lesson with him the next day.\r\n\r\nHe was an amazing instructor friendly, very smart, and fun. It was a great experience, and we would 100% do it again!', 5, 0, '2025-07-14 08:15:05', '2025-07-14 08:15:05'),
(35, 'Arthur Charron', 'Very Satisfactory', 'Great surf lessons! Jumon is patient and a great teacher. He takes the time to explain technique properly and thanks to him I was able to catch some really nice waves.\r\n\r\nAs well as being a great teacher, he\'s really cool!\r\n\r\nGreat surfing and great fun! I\'d recommend', 5, 0, '2025-07-14 08:15:59', '2025-07-14 08:15:59'),
(36, 'Louis Readings', 'Very Satisfactory', 'I had Jumon as my surf instructor and he was great. Never surfed in my life and he showed me the way of the waves. He was very knowledgeable and very experienced I felt safe and I had a blast.  Would definitely recommend', 5, 0, '2025-07-14 08:19:11', '2025-07-14 08:19:11'),
(37, 'Joe Cotterill', 'Very Satisfactory', 'Jumon was an excellent surf instructor and very knowledgeable about everything surf-related. He gave me confidence in the lineup and helped me by selecting the perfect waves for me and giving me tips to improve my technique. He was also great fun and would spend time out back calling in sets with a whistle. Would highly recommend!', 5, 0, '2025-07-14 08:20:43', '2025-07-14 08:20:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hqmGctu0FBh2dfifceGgM7mEkqUo1UO0vQOpQdAZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2swTDI2STY4VEVQMW9PMDZTRVhwUXJNclhPVEpiS2t1bVVxTFNXdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJmLWxlc3NvbnMvbGVhcm4tdG8tc3VyZiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753787617),
('XZGGiQPJkPE5S3CcuAsrG2F3ddlfPzyFp70gNGP5', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidzRsNUlWZ25xT2FOekVEUGkzQXB6WmdKTUJDaUhxQTFGa0ZLZ2p4RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1753459055);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surf_lessons`
--

CREATE TABLE `surf_lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `typeclass` varchar(255) NOT NULL,
  `description_paragraph_1` text NOT NULL,
  `description_paragraph_2` text DEFAULT NULL,
  `description_paragraph_3` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `lesson_prices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`lesson_prices`)),
  `category_lesson_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surf_lessons`
--

INSERT INTO `surf_lessons` (`id`, `title`, `slug`, `typeclass`, `description_paragraph_1`, `description_paragraph_2`, `description_paragraph_3`, `image_path`, `lesson_prices`, `category_lesson_id`, `created_at`, `updated_at`) VALUES
(5, 'Let\'s surf and have fun', 'lets-surf-and-have-fun', 'Beginner Class', 'Welcome, newbie surfer! You are just starting out on an exciting journey into the world of surfing, and we are excited to be a part of your first experience conquering the waves!', 'This is a fantastic option to learn with other surfers at a similar level, or even slightly more advanced than you. Don’t worry! Our instructors will give you their full attention and be tailored to each individual. You’ll learn the basics like how to stand on the board, paddle, and experience your first whitewater surf (small waves near the shore). It’s a great way to build confidence and have fun!', 'If you’re coming with friends or family who also want to try surfing, semi-private lessons can be ideal. You’ll get more attention from your instructor while still sharing the fun with someone you know. For the most intensive and personal learning experience, private lessons are the answer. Your instructor will focus entirely on you, helping you learn each basic step quickly and comfortably. This is perfect if you want very fast progress and one-on-one guidance.', 'surflessons/pDLUBHDwiQX8lff6rVDPzBv8QF44M2mkwtc6MxsL.jpg', '[{\"type\":\"Private\",\"price\":\"700000\"},{\"type\":\"Semi Private\",\"price\":\"600000\"},{\"type\":\"Group\",\"price\":\"500000\"}]', 2, '2025-07-24 00:50:19', '2025-07-25 08:05:47'),
(6, 'Learn To Surf', 'learn-to-surf', 'Intermediate Class', 'Welcome, intermediate surfer! You’ve moved beyond the beginner stage and are now ready to move on to a hard top board, or maybe you’ve already started using one. You’re getting the hang of turning, starting to understand how to read waves, and maybe even catching some waves yourself. We’re excited to help you take your skills even further!', 'If you want to join fellow surfers, our group lessons combine beginner and intermediate levels. We believe that surfers at both levels can share similar sized waves, but with tailored instruction and feedback. Our coaches will guide you through perfecting your turns and help you catch waves on your own, if you haven’t quite mastered it yet.', 'You can also choose semi-private lessons with a friend or partner at your level or below. This is a great way to learn in a more intimate environment. For fast progress and full attention, especially if you want to try bigger waves, we highly recommend private lessons. This individual focus will speed up your learning significantly.', 'surflessons/Us8MJFrZ5Qt0oapOg6rg2sZzbZVLKZoCHfkXSISp.jpg', '[{\"type\":\"Private\",\"price\":\"700000\"},{\"type\":\"Semi Private\",\"price\":\"600000\"},{\"type\":\"Group\",\"price\":\"500000\"}]', 1, '2025-07-25 07:56:29', '2025-07-25 08:03:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surf_trips`
--

CREATE TABLE `surf_trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_island_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bodycontent` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surf_trips`
--

INSERT INTO `surf_trips` (`id`, `title`, `slug`, `category_island_id`, `bodycontent`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mentawai Island', 'mentawai-island', 1, 'The Mentawai Islands (also known as Mentawais or Ments) are known as the holy grail of endless surf breaks. Warm water, consistent Indian Ocean swell and generally glassy conditions line up to make it one of the most sought after surf trips on Earth.\r\n\r\nThe Mentawais, which lie off the coast of Sumatra, in Indonesia were first pioneered by surfers in the late 1980s and ’90s. Previous discoveries of waves in other areas of Indonesia had surfers wondering what else was out there. The first photos of the surf breaks in the Mentawais area were leaked after a surf trip in 1992 aboard the Indies Trader, with professional surfers Ross Clarke-Jones, Tom Carroll and Martin Potter. Ever since then, the Mentawai Islands have been well on the radar of surf travellers around the world.\r\n\r\nThe Mentawai Islands surf spots are broken down into three areas – Playgrounds in the north, Sipura in the middle and Pagai in the south. These are serviced by the four main islands in the Mentawai Islands Regency – Siberut Island in the north, Sipura Island in the centre and North Pagai (Pagai-Utara Island) and South Pagai (Pagi-Selatan Island) in the south.\r\n\r\nThere are hundreds of surf breaks in the Mentawais – from world famous right-handers like Rifles and Lance’s Right to hollow lefts like Green Bush and Macaronis. The different breaks have been featured in countless surf movies over the years, with professionals and camera crews being a normal sight in the Mentawai Islands. Waves break over shallow reef, and beginner surfers should take caution. Many people like to wear reef booties or wetsuit tops to protect themselves from the sharp reef.', 'surftrips/qn20L5i5YWBle5n6Y8OodVob0w8N8fIRSdfgYmQ8.jpg', '2025-07-07 21:53:11', '2025-07-07 21:53:11'),
(2, 'Jimmy\'s Right', 'jimmys-right', 1, 'Jimmy\'s Right is more than just your average surf break; it\'s one of the most iconic and challenging right-hand waves in Krui, South Sumatra. Known for its consistent and high-quality waves, this spot is a magnet for surfers looking for an intense and rewarding experience.\r\nLocated at the northern end of Krui\'s surf break chain, Jimmy\'s Right is a Reef Break known as a \"barrel machine.\" The wave is described as \"very consistent, heavy, fast, and perfect,\" with the potential to break over 200 meters. You can find epic barrels on the outer sections, followed by sections perfect for top turns and cut-backs in the middle.\r\nThis wave is highly recommended for intermediate to advanced surfers. Jimmy\'s Right demands high commitment, accurate take-offs, and the ability to get into barrels. This is definitely not a wave for beginners, given its fast and shallow nature, especially at low tide where coral and sea urchins can be a hazard.\r\nImmy\'s Right is best with swells from the South, Southwest, or West, and offshore winds from the North or Northeast that make for smooth waves. While it works at all tides, medium to high tides are recommended for safety due to its shallow reef at low tide. The best season to visit is April through November.\r\nHowever, this wave can be fickle or unpredictable as the perfect combination of big swells, high tides, and the right winds often go against its peak season. Always be aware of heavy, fast waves, shallow reefs, and potential closeouts. Given its location, emergency help may not always be close by.\r\nWith all its challenges and beauty, Jimmy\'s Right offers an unforgettable surfing experience for those who are ready to take it on. Are you ready to conquer this iconic wave?', 'surftrips/UyxmSWjufoq9hZqzNxHYqnQsLVQBV7s9p8Hsfmz1.jpg', '2025-07-08 01:42:49', '2025-07-08 01:42:49'),
(3, 'Banyak Island', 'banyak-island', 2, 'For surfers seeking true adventure and serenity, the Banyak Islands off the coast of Aceh are the perfect answer. This exotic group of islands offers a pristine surfing experience away from the crowds, making it an attractive alternative to more crowded destinations.\r\nThe Banyak Islands are known for their stunning natural beauty, crystal clear waters and most importantly, consistent waves. The majority of the surf breaks here are Reef Breaks with good to excellent waves. While perhaps not as ferocious as the Mentawais, the Banyak Islands offer a variety of fun waves that can be enjoyed by intermediate to advanced surfers. In fact, some spots are suitable for brave beginners, especially during small swells.\r\nFrom well-known spots like Treasure Island (which is iconic for its long right-hand waves) to secret spots still waiting to be explored among the uninhabited islands, every surf session here feels like a personal discovery.\r\nThe best season to visit the Banyak Islands is the Dry Season, from May to October, when the swells are most consistent and the winds are most ideal. One of the biggest advantages is the relatively low crowds, allowing you to enjoy quiet lineups even on the best days.\r\nHowever, surfers should keep in mind that the waves here break over shallow reefs, so the use of reef booties is highly recommended. Due to its more remote location, careful planning of travel logistics and readiness for limited medical access are also important.\r\nOverall, the Banyak Islands promise an authentic and peaceful surfing adventure, far from the hustle and bustle. This is the ideal destination to experience the freedom of conquering waves amidst untouched natural beauty.\r\nReady to find your perfect wave in the Banyak Islands', 'surftrips/tqzlmvaJFLRXFqtxg9aQdp6BJt3ggGkdw3y3zRZA.jpg', '2025-07-08 01:46:46', '2025-07-08 01:46:46'),
(4, 'Sarang Gantung Island', 'sarang-gantung-island', 2, 'Sarang Gantung Island, also known locally as Sarang Alu, is a hidden gem in the Banyak Islands chain, Aceh Singkil. Strategically located as a border island between Aceh and Nias, this destination offers a rare combination of untouched natural beauty and challenging wave potential, making it an attractive choice for true adventurers.\r\nAdministratively, Sarang Gantung Island is located in the West Pulau Banyak District, Aceh Singkil Regency. Its position at the tip of Tuanku Island makes it the last island in the Banyak Islands chain that borders directly on Nias waters. Its existence on the outermost line is what gives it unique and challenging wave characteristics.\r\nAlthough its size is not too big, Sarang Gantung has a stretch of fine and sloping white sand, decorated with lush coconut trees that create a peaceful tropical atmosphere. The environment here is truly pristine and untouched by the hustle and bustle of mass tourism, suitable for those who want to escape the crowds and be at one with nature.\r\nAccess to Sarang Gantung Island is not for everyone. Its distance is quite far from the district center and the condition of the waves around the island which are often \"ferocious\" make it rarely visited. It takes special skills to navigate the boat, even by speedboat the journey can take around 1.5 hours from the nearest departure point in the Banyak Islands.\r\nHowever, it is precisely behind the challenge of access that lies its main attraction for the surfing community. Reports of big and strong waves on the edge of the island are a clear signal of the potential for a top-class surf break that is still waiting to be fully explored. Plus, its proximity to Ujung Lolok and Bangkaru, two famous surf spots in the Banyak Islands that are known to produce spectacular barrel waves, further confirms that the waters around Sarang Gantung have the ideal geographic and swell conditions for the formation of powerful waves.\r\nTherefore, if the surf break potential here is developed or explored further, it is likely that the waves will be suitable for Intermediate to Advanced surfers. Good wave reading skills, strong duck dives, and experience conquering fast reef breaks will be the main capital. This is definitely not an arena for beginner surfers.\r\nFor surfers captivated by the challenging waves and natural beauty of the Banyak Islands, especially the untouched surf potential around Sarang Gantung Island, Diamond Island Eco Resort is an unrivaled accommodation option. Strategically located on Palambak Besar Island and with a commitment to sustainable tourism, the resort not only provides comfortable and eco-friendly accommodation, but also acts as a gateway to world-class surfing adventures. With complete facilities, experienced surf guides and a boat service ready to take you to various breaks – even the most challenging – Diamond Island Eco Resort ensures you have an intense, safe and unforgettable surfing experience in one of Indonesia’s hidden gems.', 'surftrips/6tFwxCYE89wkSaT4M8urhRrxR69hu8URkrDKSV2W.jpg', '2025-07-08 01:53:44', '2025-07-08 01:53:44'),
(5, 'Enggano Island', 'enggano-island', 8, 'For surfers who are always looking for adventure and untouched waves, Enggano Island is a name that must be on your list. Located in the Indian Ocean, off the coast of Bengkulu, this outermost island of Indonesia is a gem that offers stunning natural beauty and, most importantly, the potential for very virgin surf breaks.\r\nGeographically, Enggano Island is part of North Bengkulu Regency, Bengkulu Province. Its position directly facing the Indian Ocean makes Enggano exposed to large swells that are consistent throughout the year, similar to conditions in Mentawai or Nias. This is a real promise for wave explorers.\r\nThe environment in Enggano itself is still very natural, beautiful, and far from the crowds. You will find dense tropical forests, clean white sandy beaches, and a marine ecosystem rich in healthy coral reefs. The authenticity of nature creates a peaceful atmosphere, perfect for escaping the hustle and bustle of city life.\r\nAccess to Enggano is indeed part of the adventure itself. The island remains \"virgin\" largely because its access is quite difficult and requires patience. You can choose a pioneer flight from Fatmawati Soekarno Airport (Bengkulu) to Enggano Airport, which takes about an hour, but the schedule can be very limited. Another alternative is a more challenging sea journey by ferry from Pulau Baai Harbor (Bengkulu) to Kahyapu Harbor (Enggano), with a duration of about 10-12 hours and very dependent on weather conditions. This challenge actually adds to the exclusivity of the experience offered by Enggano.\r\nThis is the most interesting part for surfers: the potential of Enggano waves. As an island that receives the Indian Ocean swell directly, Enggano is believed to have various types of surf breaks, from challenging Reef Breaks to softer Beach Breaks. Reports from early explorers often mention the presence of quality waves at several points, but the details are still waiting to be explored further.\r\nThe biggest attraction of Enggano is the thousands of waves that probably do not yet have names, waiting to be conquered for the first time. You have the potential to be one of the pioneers who carve a trail on untouched waves. Given the difficult access and the power of the Indian Ocean swell, Enggano is best suited for Intermediate to Advanced surfers with an adventurous and independent mindset. This is not a recommended destination for beginners.\r\nKeep in mind, facilities and infrastructure on Enggano Island are still very limited. Don\'t expect to find luxury resorts or surf shops. Accommodation is generally in the form of simple homestays managed by local residents, with basic facilities. Therefore, self-preparation is the main key to ensuring your trip is comfortable.\r\nHowever, these limitations are offset by the extraordinary friendliness of the Enggano people. Interaction with the humble locals will add to the richness of your experience on this remote island.', 'surftrips/w4SSPgtS3IV2XEmjafNuJEedevY8WXDomhc6mj1T.jpg', '2025-07-08 01:57:56', '2025-07-08 01:57:56'),
(6, 'Telos Islands, Sumatra – The Hidden Surf Paradise', 'telos-islands-sumatra-the-hidden-surf-paradise', 1, 'Welcome to Telos Islands often called Magic Carpet, is one of the surfing spots in South Sumatra., a secluded chain of tropical gems tucked away in Sumatra, Indonesia. Known for their crystal-clear waters, world-class reef breaks, and laid-back surf culture, the Telos are a dream destination for surfers of all levels – from beginners to seasoned barrel hunters.\r\n________________________________________\r\n•	Surf Overview\r\nWave Quality\r\nTelos Islands are famed for their consistent reef breaks, offering both lefts and rights with playful to hollow barrels. You’ll find smooth, glassy conditions, warm water (~28°C year-round), and minimal crowds – a rare combination in today’s surf world.\r\nBest Surf Season \r\nMay to October is the prime surf season, with clean, powerful swells reaching up to 3 meters, consistent offshore winds, and dreamy, tropical conditions. Whether you\'re chasing big barrels or easy cruisers, this is the time to go.\r\n________________________________________\r\n•	Popular Surf Spots\r\nNorth Telos\r\n•	GTs – A fast, barreling right-hander for experienced surfers. Powerful and punchy.\r\n•	Churches – A friendly left with long walls, great for all levels.\r\nSouth Telos\r\n•	Monkeys – A mellow, consistent left perfect for intermediate surfers.\r\n•	Pasti – A world-class right that offers speed, power, and clean barrels – a favorite for advanced riders.\r\nOther notable spots include:\r\nThe Bubble, Max’s Left & Right, Pinnacles, Kindy’s, Tantras, Baga, Lado Lado, Tangguh, Tantang, Schoolyards Region, and more. Whether you\'re after playful peelers or adrenaline-pumping tubes, there’s a wave with your name on it.\r\n________________________________________\r\n•	 Access & Transport\r\nGetting to the Telos usually involves private boat transfers from nearby islands or charter flights from Padang or Medan. Once you’re in the region, most surf resorts provide fast boat access to the breaks, ensuring you\'re always on the best wave of the day.\r\n________________________________________\r\n•	Surf Resorts & Accommodation\r\nWhile the islands are remote, they’re well-equipped for surfers with all-inclusive resorts offering boat transfers, surf guides, gourmet meals, and oceanfront rooms. Some top options include:\r\n•	Latitude Zero – Telo Islands\r\nA high-end, all-inclusive surf resort featuring beachfront bungalows, a private island, and poolside luxury.\r\n•	LOPO Hotel & Resort – ~107 km away\r\n•	Toba Sunset – ~104 km away\r\n•	TBI (Taman Baloho Indah) – ~350 km away\r\nResorts are typically located right on the beach or on private islets, with direct boat access to the best waves.\r\n________________________________________\r\n•	Cafes & Chill Spots\r\nDue to the islands’ secluded nature, options for independent cafes are limited. However, most resorts feature in-house cafes and lounges with fresh food and excellent coffee. If you\'re exploring the surrounding areas:\r\n•	Zi NiNe Cafe – Located in Pulau-Pulau Batu (approx. 411 km away), it’s a cozy stop for travelers heading through Nias.\r\n________________________________________\r\n•	Why Telos?\r\nIf you\'re dreaming of empty lineups, crystal-clear waves, and a surf trip that feels like a true escape, the Telos Islands deliver. It’s a place where you reconnect with nature, find your rhythm, and experience Indonesia\'s surf culture in its most untouched form.\r\nWhether you\'re cruising at Churches or charging Pasti, surfing Telos is more than just riding waves — it’s an adventure, a retreat, and a journey into paradise.', 'surftrips/2zEMnOPeCjrshlZVkJuUKLJAf0IIgJsL8F56c4qz.jpg', '2025-07-22 07:41:42', '2025-07-22 07:41:42'),
(7, 'Jenny’s Right – The Hidden Jewel of Sumatra', 'jennys-right-the-hidden-jewel-of-sumatra', 1, 'Tucked along the wild coastline of South Sumatra, Jenny’s Right is a wave that embodies the raw beauty and power of the region. Known for its long, clean walls and forgiving takeoffs, this spot has become a must-surf destination for those exploring the Krui surf zone.\r\nWave Overview\r\nType: Reef break (Right-hander)\r\nLevel: Intermediate to Advanced\r\nBest Swell Direction: South to Southwest\r\nIdeal Wind: East\r\nTide: Mid to High\r\nWave Length: Up to 150 meters\r\nBarrel Sections: Occasionally on the inside\r\nJenny’s Right offers a versatile ride — mellow enough to practice turns and positioning, but with occasional sections that surprise you with speed and shape. It’s one of those waves where both style and power can shine, depending on how you surf it.\r\n________________________________________\r\nLocation\r\nLocated just north of Krui town, Jenny’s Right is part of a cluster of breaks that includes The Peak, Leftovers, and Honey Smacks. The break sits off a coral reef, and while it’s not as heavy as some nearby slabs, proper reef booties are still recommended.\r\n________________________________________\r\nCrowd Factor & Vibe\r\nExpect a laid-back lineup. The crowd is usually light, especially compared to more famous breaks. It’s a great spot for longboarders and shortboarders alike, making it a go-to wave for mixed-level groups.\r\n________________________________________\r\nPro Tips\r\n•	Morning sessions tend to offer the glassiest conditions.\r\n•	Bring reef booties for low tide paddles.\r\n•	The inside section offers playful lip sections for intermediate surfers.\r\n•	Stay nearby in Krui town or one of the surf camps within 10 minutes’ drive.\r\n________________________________________\r\nWhy Jenny’s Right?\r\nJenny’s Right may not make magazine covers, but that’s what makes it special. It’s uncrowded, consistent, and fun — the kind of wave you end up falling in love with because of its easy charm and raw beauty. It’s perfect for those slow mornings when you just want a relaxing session, or for warming up before tackling heavier breaks like The Peak or Mandiri Beach.', 'surftrips/whWU9wT9GMGMHroAMWwdq1kfWxlxaLnpkI6jcZ12.jpg', '2025-07-22 07:46:13', '2025-07-22 07:46:13'),
(8, 'Krui Right – The Sleepy Twin with Surprise Power', 'krui-right-the-sleepy-twin-with-surprise-power', 1, 'While its more famous neighbor Krui Left gets all the spotlight, Krui Right quietly offers up a clean, sometimes powerful ride when the conditions are right. It’s less consistent, but when it turns on, it’s a beautiful, mellow right-hander that can be just as fun.\r\nWave Overview\r\n•	Type: Reef break (Right-hander)\r\n•	Level: Beginner to Intermediate\r\n•	Best Swell Direction: Southwest\r\n•	Ideal Wind: East\r\n•	Tide: Mid tide\r\n•	Wave Length: 50–120 meters\r\n•	Barrel Sections: Rare, mostly walls\r\nNot a wave for big swells, Krui Right shines on smaller days with clean conditions. It’s a perfect warm-up spot or a fun option when Left is too crowded or too heavy.\r\n________________________________________\r\nLocation\r\nJust across the channel from Krui Left — you can see one from the other. A short paddle from the shoreline, or simply walk and launch from the other side of the break wall.\r\n________________________________________\r\nCrowd Factor & Vibe\r\nVery few people surf Krui Right. That’s its magic. It’s almost always uncrowded, giving you room to relax, experiment, or share waves with just a few friends.\r\n________________________________________\r\nWhy Krui Right?\r\nUnderstated and underrated, Krui Right is like that quiet local café that serves the best coffee — not flashy, but worth every visit. Whether you\'re just starting out or need a peaceful session between bigger days, this is the wave to unwind and enjoy Sumatra’s slower rhythm.', 'surftrips/yiUT7xrMJle7Lgs1PbIlZEonU0pLSJ9fUNMPvVcX.jpg', '2025-07-22 08:04:20', '2025-07-22 08:04:20'),
(9, 'Krui Left – A World-Class Left in the Heart of Town', 'krui-left-a-world-class-left-in-the-heart-of-town', 1, 'Krui Left is the jewel of South Sumatra’s coastline, delivering long, wrapping left-handers just steps away from the main street of Krui town. It’s a high-performance wave that draws surfers from around the world, thanks to its perfect walls, hollow sections, and postcard surroundings.\r\nWave Overview\r\n•	Type: Reef break (Left-hander)\r\n•	Level: Intermediate to Advanced\r\n•	Best Swell Direction: South to Southwest\r\n•	Ideal Wind: East to Northeast\r\n•	Tide: Mid to High\r\n•	Wave Length: Up to 200 meters\r\n•	Barrel Sections: Yes, especially at lower tides\r\nExpect a fast and rippable wave with the potential for long rides and clean barrels when the conditions line up. On good days, Krui Left can hold overhead swell and serve up world-class sessions.\r\n________________________________________\r\nLocation\r\nSmack in the middle of Krui town, this break is as central as it gets. You can walk from your homestay or surf camp with your board under your arm and paddle out within minutes. It breaks over a flat reef, but the entry and exit points are well-known and manageable.\r\n________________________________________\r\nCrowd Factor & Vibe\r\nKrui Left can get crowded during peak surf season (May to October), especially when it’s firing. But the lineup stays relatively friendly — a mix of traveling surfers and local rippers. Mornings and late afternoons offer the cleanest waves with fewer people.\r\n________________________________________\r\nWhy Krui Left?\r\nIt’s reliable, punchy, and always fun. Krui Left is the ideal playground for surfers looking to sharpen their turns, get barreled, or just enjoy a consistent, quality wave in a super convenient location. It’s the heartbeat of the Krui surf scene.', 'surftrips/hTHL5hF1kWph7psJDafXY13RPXdh2g0XsrinuzBT.jpg', '2025-07-22 08:05:43', '2025-07-22 08:05:43'),
(10, 'Way Jambu – \"Sumatra Pipe\"', 'way-jambu-sumatra-pipe', 1, 'Known locally as Way Jambu and internationally as the Sumatra Pipe, this wave is a heavy, hollow, freight-train of a left. It\'s not for the faint of heart — Way Jambu is a serious wave for serious surfers. Often compared to Pipeline in Hawaii, it delivers thick, barreling sections over shallow reef and demands full commitment.\r\nWave Overview\r\n•	Type: Left-hand reef break\r\n•	Level: Advanced to Expert\r\n•	Best Swell Direction: South to Southwest\r\n•	Ideal Wind: Northeast\r\n•	Tide: Mid to High\r\n•	Wave Length: 100–150 meters\r\n•	Barrel Sections: Constant and powerful\r\nWay Jambu is heaviest on a pushing tide and a solid south swell. When it’s on, expect perfect deep barrels, fast take-offs, and a very shallow reef below. Helmets recommended.\r\n________________________________________\r\nLocation\r\nLocated around 20–25 minutes south of Krui town, Way Jambu sits in a quieter village setting with only a few surf camps nearby. Access is easy by car or scooter, with a short walk to the reef entrance.\r\n________________________________________\r\nCrowd Factor & Vibe\r\nDespite its fame, Way Jambu remains uncrowded due to its heavy nature. The vibe is intense — surfers here are serious, respectful, and focused. It’s a place where you wait your turn and earn your wave.\r\n________________________________________\r\nWhy Way Jambu?\r\nIf you\'re chasing power, perfection, and pits, this is your spot. Way Jambu is one of Indonesia’s heaviest lefts, and getting a proper barrel here will leave you buzzing for life.', 'surftrips/nTuYoxW6RCE14tutktagfBDux5zRumEQgcpYyXan.jpg', '2025-07-22 08:09:26', '2025-07-22 08:09:26'),
(11, 'Ujung Bocur – \"The Point\"', 'ujung-bocur-the-point', 1, 'Often called The Point or Ujung Bocur, this is one of the most iconic and consistent waves in all of Sumatra. It’s a long, wrapping left-hand point break with multiple sections, offering everything from rippable walls to occasional barrels. It\'s the centerpiece of the Krui surf zone.\r\nWave Overview\r\n•	Type: Left-hand point break over reef\r\n•	Level: Intermediate to Advanced\r\n•	Best Swell Direction: Southwest\r\n•	Ideal Wind: East to Northeast\r\n•	Tide: Mid\r\n•	Wave Length: 150–300 meters\r\n•	Barrel Sections: Yes, especially on the inside\r\nOn a good day, you can get rides over 200 meters long, with carving shoulders and the occasional barreling end section. It’s the kind of wave where you can truly open up and flow.\r\n________________________________________\r\nLocation\r\nUjung Bocur is located in the village of Tanjung Setia, about 20 km south of Krui town. It’s easily accessible and surrounded by surf camps, homestays, and beachfront cafes. Many accommodations sit right in front of the wave — you can check the lineup while sipping your coffee.\r\n________________________________________\r\nCrowd Factor & Vibe\r\nAs the most consistent wave in the area, The Point does attract a crowd, especially in peak season (May–September). However, due to its length, there’s plenty of room to spread out. The vibe is relaxed but respectful — most surfers are experienced travelers who know the etiquette.\r\n________________________________________\r\nWhy Ujung Bocur?\r\nUjung Bocur is the soul of South Sumatra surfing — reliable, stylish, and endlessly fun. Whether you’re chasing your first Indo point wave or hunting for long lefts to carve, The Point delivers day after day.', 'surftrips/Ahgn39cbexgXZnKgHwma2lkJcvbEKP8mpV1hbF53.jpg', '2025-07-22 08:11:00', '2025-07-22 08:11:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Teampal Surf', 'adminteampalsurflesson@gmail.com', NULL, '$2y$12$jHk8pNPf5BrwnWlQklw57.DHNRUim0VwINx3KyjyEmI1eHpge.yRq', NULL, '2025-07-07 21:52:15', '2025-07-07 21:52:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `category_islands`
--
ALTER TABLE `category_islands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_islands_slug_unique` (`slug`);

--
-- Indeks untuk tabel `category_lessons`
--
ALTER TABLE `category_lessons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_lessons_slug_unique` (`slug`);

--
-- Indeks untuk tabel `content_management`
--
ALTER TABLE `content_management`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `content_management_section_name_unique` (`section_name`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `surf_lessons`
--
ALTER TABLE `surf_lessons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `surf_lessons_slug_unique` (`slug`),
  ADD KEY `surf_lessons_category_lesson_id_foreign` (`category_lesson_id`);

--
-- Indeks untuk tabel `surf_trips`
--
ALTER TABLE `surf_trips`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `surf_trips_slug_unique` (`slug`),
  ADD KEY `surf_trips_category_island_id_foreign` (`category_island_id`);

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
-- AUTO_INCREMENT untuk tabel `category_islands`
--
ALTER TABLE `category_islands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `category_lessons`
--
ALTER TABLE `category_lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `content_management`
--
ALTER TABLE `content_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `surf_lessons`
--
ALTER TABLE `surf_lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `surf_trips`
--
ALTER TABLE `surf_trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surf_lessons`
--
ALTER TABLE `surf_lessons`
  ADD CONSTRAINT `surf_lessons_category_lesson_id_foreign` FOREIGN KEY (`category_lesson_id`) REFERENCES `category_lessons` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `surf_trips`
--
ALTER TABLE `surf_trips`
  ADD CONSTRAINT `surf_trips_category_island_id_foreign` FOREIGN KEY (`category_island_id`) REFERENCES `category_islands` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
