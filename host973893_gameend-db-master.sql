-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Lis 14, 2023 at 07:00 PM
-- Wersja serwera: 10.6.15-MariaDB-cll-lve
-- Wersja PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `host973893_gameend-db-master`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'frontend', '2023-10-15 15:55:02', '2023-10-15 15:55:02'),
(2, 'backend', '2023-10-15 15:56:09', '2023-10-15 15:56:09'),
(3, 'gry', '2023-10-15 15:56:09', '2023-10-15 15:56:09'),
(4, 'pozostałe', '2023-10-15 15:56:35', '2023-10-15 15:56:35');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
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
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_03_155414_create_posts_table', 1),
(6, '2023_10_04_040425_create_categories_table', 1),
(7, '2023_10_04_040917_create_tags_table', 1),
(8, '2023_10_04_041700_create_post_tag_table', 1),
(9, '2023_10_06_170004_create_videos_table', 1),
(10, '2023_10_07_173044_create_tag_video_table', 1),
(11, '2023_10_13_073410_add_is_admin_to_users_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `thumbnail`, `content`, `created_at`, `updated_at`) VALUES
(1, 4, 'Najlepsze wtyczki do WordPress\'a - Cookie Notice', 'najlepsze-wtyczki-do-wordpressa-cookie-notice', 'thumbnails/6F53XLH5sI8VzGBU7edioThMznbE6YeZkSZ23bml.webp', '<p>Moje odczucia co do&nbsp;<strong>WordPressa</strong> są niezwykle mieszane. Z jednej strony można wszystko stosunkowo szybko implementować, co jest niezwykle pomocne. Dajmy na przykład wrzucenie slidera. Jest masa wtyczek która posiada cały ogrom gotowych pre-setów, które można zmieniać do własnego upodobania w przeciągu kilku sekund. Napisanie czegoś takiego od zera za pomocą CSS’a i JavaScripta zajęłaby masę czasu. Z drugiej zaś jest to obarczone toną zbędnego kodu który i tak musi być zaimplementowany na stronę, co powoduje, że nie jest ona demonem prędkości. Traktuję więc WordPressa jako narzędzie które wykorzystuje w niektórych przypadkach. Tak jak z młotkiem. Nadaje się do pewnych rzeczy, a do innych już niekoniecznie.</p><p>&nbsp;</p><p>Nie zanosi się aby mój ambiwalentny stosunek uległ szybkiej zmianie. Nie stoi to jednak na przeszkodzie aby wykorzystać WordPressa najlepiej jak się da. Jego mocą są wtyczki tak więc postanowiłem stworzyć listę najlepszych pomocników. Pierwszym zawodnikiem który ubierze koszulkę tegoż elitarnego grona będzie&nbsp;<strong>Cookie Notice</strong> dostępne jest tutaj:<a href=\"https://pl.wordpress.org/plugins/cookie-notice/\">&nbsp;</a><a href=\"https://pl.wordpress.org/plugins/cookie-notice/.\">https://pl.wordpress.org/plugins/cookie-notice/.</a></p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:800/325;\" src=\"https://gameend.pl/media/cookie-notice_02_1696911749_1697385797.webp\" width=\"800\" height=\"325\"></figure><p>&nbsp;</p><p>Stworzenie całkiem gustownego baneru informującego o zbieraniu ciasteczek przez naszą stronę jest dziecinnie proste. Developer wtyczki zadbał o możliwość edycji tak naprawdę każdego aspektu wizualnego, poczynając od zmiany treści tekstu, przycisków czy też kolorów. Bardzo dobrą opcją jest opcja ustawienia na jak długo chcemy zapisać ciasteczka w pamięci przeglądarki.</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:800/577;\" src=\"https://gameend.pl/media/cookie-notice_04_1696911764_1697385828.webp\" width=\"800\" height=\"577\"></figure><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:800/375;\" src=\"https://gameend.pl/media/cookie-notice_05_1696911931_1697385837.webp\" width=\"800\" height=\"375\"></figure><p>&nbsp;</p><p>Finalny wygląd prezentuje się następująco. Szybko, łatwo i przyjemnie. Gdyby wszystkie wtyczki WordPress\'a w takim stopniu jak&nbsp;<strong>Cookie Notice</strong> spełniały swoje przeznaczenia to byłaby bajka.</p>', '2023-10-15 14:04:14', '2023-10-15 14:04:14'),
(2, 3, 'Ratchet & Clank: Rift Apart - recenzja', 'ratchet-clank-rift-apart-recenzja', 'thumbnails/ke980lKBfESzqh0BKoXBOMfivH7lk4doo440YBiZ.webp', '<p>Platformówki 3D to gatunek gier które towarzyszą mi od najmłodszych lat. Lista reprezentantów która zagościła na ekranie mojego monitora jest niezwykle obszerna i same wspomnienia o nich przywołują uśmiech na twarzy. Do dziś pamiętam wielkie kartonowe pudełko zamieszkane przez Kangurka Kao(Kakao) na którym widniał ogromny napis 49zł. Swoją droga te pudełka były świetne!&nbsp;</p><p>&nbsp;</p><p>W dzisiejszych czasach nie można powiedzieć, że ten gatunek umarł jednak z pewnością ma o wiele mniejszą siłę przebicia. Jednak gdy wychodzi taki tytuł jak bohater dzisiejszej recenzji to jest właśnie ten moment powrotu na szczyty. <strong>Ratchet &amp; Clank: Rift Apart</strong> to gra niesamowita, można wręcz powiedzieć, że w moich oczach została ona wizytówką uwielbianego przeze mnie gatunku.&nbsp;</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://gameend.pl/media/ratchet_08_1697518184.webp\"></figure><p>&nbsp;</p><p>Najnowsza odsłona Ratchet’a bez wątpienia oszałamia grafiką. Grałem na komputerze PC i to co widziałem naprawdę robiło wrażenie. Renderowane przerywniki filmowe to majstersztyk. Kiedyś mówiono, że to dopiero będzie jak gry będą wyglądać jak filmy animowane. To będą czasy, to będzie technologia. I wiecie co? Te czasy nastały.<strong> Ratchet wygląda lepiej niż nie jedna ‘kreskówka’. </strong>Na zbliżeniach można mu wręcz policzyć włoski futra. Oprawa wizualna samej gry również jest pierwsza klasa. Choćbym chciał to nie mam się do czego przyczepić. Zresztą zobaczcie sami screeny albo chociaż gameplay na YouTubie – z pewnością staniecie za mną murem przy tej opinii.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://gameend.pl/media/ratchet_03_1697518201.webp\"></figure><p>&nbsp;</p><p>Jednym z najbardziej efektownych osiągnięć technologicznych jest to jak główni bohaterowie podróżują między wymiarami. Kiedy przemierzają obcy świat może się przed nimi pojawić okna do alternatywnej rzeczywistości. <strong>Przejście między lokacjami odbywa się błyskawicznie beż żadnych ekranów ładowania. </strong>Co więcej często jest tak, że zmiana otoczenia następuje w locie. Aby to lepiej zwizualizować wyobraźcie sobie, że jedziecie kolejką górską przez szczyty miasta. Nagle wlatujecie w portal i dalej jedziecie, z tym że otoczeniem może być już kosmos albo prehistoryczne tereny zamieszkane przez dinozaury. Genialna sprawa. Portale są również wykorzystywane do szybkiego przemieszczania się w obszarze walki. Dodaje to dynamikę oraz nutkę strategii do pojedynków.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://gameend.pl/media/ratchet_09_1697518209.webp\"></figure><p><br>Wspomniałem nieco wcześniej o alternatywnych wymiarach i są one motywem przewodnim nowej odsłony Ratcheta i Clanka. Otóż tytułowy robocik konstruuje Wymiaromat którym obdarowuje swojego przyjaciela aby umożliwić mu poszukiwanie innych przedstawicieli jego gatunku. <strong>Jak to zwykle bywa nie wszystko toczy się po myśli naszych bohaterów i zamiast uciechy jest klops.</strong> Duet dzielnych przyjaciół trafia do innego wymiaru gdzie poznają swoje alternatywne wersje, jak i znane już z poprzednich części postacie ubrane w nieco inne szaty. Nie ma tutaj co oczekiwać fabuły rodem z wybitnych dzieł literackich ale z pewnością jest zabawnie, lekko i przyjemnie.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://gameend.pl/media/ratchet_13_1697518218.webp\"></figure><p>&nbsp;</p><p>Nawet najlepsze doznania wizualne muszą być w grze wideo jedynie dodatkiem do rozgrywki. <strong>Rift Apart czerpie całymi garściami z poprzedników jedynie udoskonalając znaną i lubianą formułę.</strong> Jest to platformówka więc przyjdzie nam skakać, wspinać się i eksplorować różnorodne terytoria w poszukiwaniu znajdziek oraz śrubek. Są one walutą za którą można ulepszać bronie. A strzelać będziemy co nie miara. Przeciwników jest od groma. Od malutkich żabek, przez latające roboty aż po wielkie maszyny kroczące czy gargantuistyczne dinozaury. Rodzajów giwer jest również całe zatrzęsienie więc nie sposób się nudzić. Będziemy zmuszeni do częstej zmiany oręża przez to, że amunicja jest ograniczona. Jest to jednak świetny zabieg i nie musicie się obawiać, że będzie on wpływał negatywnie na rozgrywkę.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://gameend.pl/media/ratchet_22_1697518230.webp\"></figure><p><br>Oprócz wyżej wspomnianych elementów twórcy przygotowali również sekwencje logiczne. Nie są one może zbytnio wyszukane, z pewnością też nie przegrzeją Waszych szarych komórek ale są bardzo miła odskocznią od szybkiego i efektownego przemierzania uniwersum Ratchet’a.<strong> Ogólnie cała gra jest bardzo zróżnicowana, szybkie sekcje są przeplatane wolniejszymi co czyni tę produkcję kompletną.</strong></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://gameend.pl/media/ratchet_07_1697518246.webp\"></figure><p>&nbsp;</p><p>Podsumowując <strong>Ratchet &amp; Clank: Rift Apart to pozycja obowiązkowa dla każdego fana platformówek ale i nie tylko</strong>. Świetny wygląd, miodny gameplay okraszony kapitalnym polskim tłumaczeniem i dubbingiem to mieszanka wręcz idealna dla każdego gracza. Zarówno dla tych z młodszego i starszego pokolenia. Polecam z czystym sercem, oby więcej pojawiało się takich zacnych perełek w naszym growym świecie.</p><p><br>&nbsp;</p>', '2023-10-17 02:45:59', '2023-10-17 02:50:49');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 4, 'WordPress', '2023-10-15 16:00:02', '2023-10-15 16:00:02'),
(2, 1, 'Vue', '2023-11-07 18:54:03', '2023-11-07 18:54:03');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tag_video`
--

CREATE TABLE `tag_video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Marek Gacek', 'marekgacek45@gmail.com', NULL, '$2y$10$fKgFpg/yXDlN2YNtly84SOc9DFlxq7MZqBm8rAKiAuBkBKT6jLoCO', NULL, '2023-10-15 13:51:12', '2023-10-15 13:51:12', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indeksy dla tabeli `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tag_video`
--
ALTER TABLE `tag_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_video_video_id_foreign` (`video_id`),
  ADD KEY `tag_video_tag_id_foreign` (`tag_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeksy dla tabeli `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tag_video`
--
ALTER TABLE `tag_video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `tag_video`
--
ALTER TABLE `tag_video`
  ADD CONSTRAINT `tag_video_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `tag_video_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
