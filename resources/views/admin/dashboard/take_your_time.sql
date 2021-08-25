-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 23, 2021 at 12:27 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `take_your_time`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_posts`
--

CREATE TABLE `all_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_posts`
--

INSERT INTO `all_posts` (`id`, `post_id`, `name`, `type`, `slug`, `title`, `deadline`, `image`, `created_at`, `updated_at`) VALUES
(7, 22, 'scholarship', 'Fellowship', 'yangon-university-of-business', 'Yangon University of Business', '2022-02-05', '611e7ec009e3bBasic Frontend Web Development (1).png', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(9, 17, 'conference', '-', 'asian-conference-by-un', 'Asian Conference By UN', '2021-09-16', '6120a29d368a5jp_scholar.jpeg', '2021-08-21 00:19:53', '2021-08-21 09:02:01'),
(10, 17, 'job', 'full_time_job', 'web-developer', 'Web Developer', '2021-08-06', '6122171f0bf24IMG_2171.JPG', '2021-08-21 22:48:13', '2021-08-22 02:51:35'),
(12, 19, 'job', 'internship', 'content-writer', 'Content Writer', '2021-08-10', '612219779af35IMG_1678.jpg', '2021-08-22 03:01:35', '2021-08-22 03:01:35'),
(15, 17, 'other', 'competition', 'un-seminar-in-uk', 'UN Seminar in UK', '2021-08-20', '61223c9fed997IMG_2171.JPG', '2021-08-22 05:31:35', '2021-08-22 06:26:18'),
(16, 18, 'other', 'seminar', 'myanmar-seminar', 'Myanmar Seminar', '2021-08-20', '6122491a7086djapan_scholar.jpeg', '2021-08-22 06:24:50', '2021-08-22 06:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_conferences`
--

CREATE TABLE `benefit_conferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conference_id` bigint(20) UNSIGNED NOT NULL,
  `benefit` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefit_conferences`
--

INSERT INTO `benefit_conferences` (`id`, `conference_id`, `benefit`, `created_at`, `updated_at`) VALUES
(13, 17, 'Japanese Government (MEXT) Scholarship ကိုတော့ Maximum 8 Students ကို recommend ပေးသွားမှာဖြစ်ပြီး Entrance Fee (JPY 282,000) နဲ့ Annual Tuition’s JPY 535,800 (JPY 267,900 x 2) တို့အတွက် စဉ်းစားပေးသွားမယ့်အပြင် Living Stipend ကိုလည်း Economy air ticket to/from Japan အပါအဝင် 4 Years အတွက် JPY 119,000/month စီစဉ်ပေးသွားမှာဘဲဖြစ်ပါတယ် 👉 President Fellowship မှာဆိုရင် Examination Fee နဲ့ Entrance Fee (JPY 282,000) ကို After Enrollment မှာ Refunded လုပ်ပေးသွားဖို့အပြင် Living Stipend အတွက် Maximun 4 Years (JPY 267,900/term) ကိုပြင်ဆင်ပေးဖို့ရှိပြီး Students တွေအနေနဲ့ Tuition Fees ကိုလည်း Fully (or) Partially Funded ရဖို့ Apply လုပ်နိုင်ပါသေးတယ်… 👉 Privately Financed International Students တွေရဲ့ MEXT Honors Scholarship မှာတော့ Living Stipend (JPY 48,000/month) အတွက်ကို First 6 months (Oct. 2022 to Mar. 2023) ထောက်ပံ့ပေးသွားဖို့ ဘဲဖြစ်ပါတယ်…👍', '2021-08-21 09:02:01', '2021-08-21 09:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_grants`
--

CREATE TABLE `benefit_grants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grant_id` bigint(20) UNSIGNED NOT NULL,
  `benefit` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefit_grants`
--

INSERT INTO `benefit_grants` (`id`, `grant_id`, `benefit`, `created_at`, `updated_at`) VALUES
(24, 16, 'UTokyo ရဲ့အဓိက scholar အနေနဲ့ကတော့ Admission fee, Tuition, Living Expenses စုစုပေါင်းအနေနဲ့  💰 (JPY 126,000 for monthly) cover up လုပ်နိုင်မှာဖြစ်ပါတယ်။ Scholar အနေနဲ့ကတော့ ၄ နှစ်ကာလရမှာဖြစ်ပြီးတော့ကိုယ့်ကြိုးစားမှုအပေါ်မူတည်ပြီး allowance လဲပြန်လည်ရရှိနိုင်မှာပါ 💁‍♂️', '2021-08-20 11:23:54', '2021-08-20 11:23:54'),
(25, 16, 'Japanese Government (MEXT) Scholarship ကိုတော့ Maximum 8 Students ကို recommend ပေးသွားမှာဖြစ်ပြီး Entrance Fee (JPY 282,000) နဲ့ Annual Tuition’s JPY 535,800 (JPY 267,900 x 2) တို့အတွက် စဉ်းစားပေးသွားမယ့်အပြင် Living Stipend ကိုလည်း Economy air ticket to/from Japan အပါအဝင် 4 Years အတွက် JPY 119,000/month စီစဉ်ပေးသွားမှာဘဲဖြစ်ပါတယ် 👉 President Fellowship မှာဆိုရင် Examination Fee နဲ့ Entrance Fee (JPY 282,000) ကို After Enrollment မှာ Refunded လုပ်ပေးသွားဖို့အပြင် Living Stipend အတွက် Maximun 4 Years (JPY 267,900/term) ကိုပြင်ဆင်ပေးဖို့ရှိပြီး Students တွေအနေနဲ့ Tuition Fees ကိုလည်း Fully (or) Partially Funded ရဖို့ Apply လုပ်နိုင်ပါသေးတယ်… 👉 Privately Financed International Students တွေရဲ့ MEXT Honors Scholarship မှာတော့ Living Stipend (JPY 48,000/month) အတွက်ကို First 6 months (Oct. 2022 to Mar. 2023) ထောက်ပံ့ပေးသွားဖို့ ဘဲဖြစ်ပါတယ်…👍', '2021-08-20 11:23:54', '2021-08-20 11:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_jobs`
--

CREATE TABLE `benefit_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `benefit` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefit_jobs`
--

INSERT INTO `benefit_jobs` (`id`, `job_id`, `benefit`, `created_at`, `updated_at`) VALUES
(10, 17, 'It is benefirt', '2021-08-22 02:51:35', '2021-08-22 02:51:35'),
(11, 19, 'UTokyo ရဲ့အဓိက scholar အနေနဲ့ကတော့ Admission fee, Tuition, Living Expenses စုစုပေါင်းအနေနဲ့  💰 (JPY 126,000 for monthly) cover up လုပ်နိုင်မှာဖြစ်ပါတယ်။ Scholar အနေနဲ့ကတော့ ၄ နှစ်ကာလရမှာဖြစ်ပြီးတော့ကိုယ့်ကြိုးစားမှုအပေါ်မူတည်ပြီး allowance လဲပြန်လည်ရရှိနိုင်မှာပါ 💁‍♂️', '2021-08-22 03:01:35', '2021-08-22 03:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_others`
--

CREATE TABLE `benefit_others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `other_id` bigint(20) UNSIGNED NOT NULL,
  `benefit` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefit_others`
--

INSERT INTO `benefit_others` (`id`, `other_id`, `benefit`, `created_at`, `updated_at`) VALUES
(4, 18, 'UTokyo ရဲ့အဓိက scholar အနေနဲ့ကတော့ Admission fee, Tuition, Living Expenses စုစုပေါင်းအနေနဲ့  💰 (JPY 126,000 for monthly) cover up လုပ်နိုင်မှာဖြစ်ပါတယ်။ Scholar အနေနဲ့ကတော့ ၄ နှစ်ကာလရမှာဖြစ်ပြီးတော့ကိုယ့်ကြိုးစားမှုအပေါ်မူတည်ပြီး allowance လဲပြန်လည်ရရှိနိုင်မှာပါ 💁‍♂️', '2021-08-22 06:24:50', '2021-08-22 06:24:50'),
(6, 17, 'UTokyo ရဲ့အဓိက scholar အနေနဲ့ကတော့ Admission fee, Tuition, Living Expenses စုစုပေါင်းအနေနဲ့  💰 (JPY 126,000 for monthly) cover up လုပ်နိုင်မှာဖြစ်ပါတယ်။ Scholar အနေနဲ့ကတော့ ၄ နှစ်ကာလရမှာဖြစ်ပြီးတော့ကိုယ့်ကြိုးစားမှုအပေါ်မူတည်ပြီး allowance လဲပြန်လည်ရရှိနိုင်မှာပါ 💁‍♂️', '2021-08-22 06:26:18', '2021-08-22 06:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_scholarships`
--

CREATE TABLE `benefit_scholarships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scholarship_id` bigint(20) UNSIGNED NOT NULL,
  `benefit` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefit_scholarships`
--

INSERT INTO `benefit_scholarships` (`id`, `scholarship_id`, `benefit`, `created_at`, `updated_at`) VALUES
(1, 16, 'UTokyo ရဲ့အဓိက scholar အနေနဲ့ကတော့ Admission fee, Tuition, Living Expenses စုစုပေါင်းအနေနဲ့  💰 (JPY 126,000 for monthly) cover up လုပ်နိုင်မှာဖြစ်ပါတယ်။ Scholar အနေနဲ့ကတော့ ၄ နှစ်ကာလရမှာဖြစ်ပြီးတော့ကိုယ့်ကြိုးစားမှုအပေါ်မူတည်ပြီး allowance လဲပြန်လည်ရရှိနိုင်မှာပါ 💁‍♂️', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(3, 18, 'UTokyo ရဲ့အဓိက scholar အနေနဲ့ကတော့ Admission fee, Tuition, Living Expenses စုစုပေါင်းအနေနဲ့  💰 (JPY 126,000 for monthly) cover up လုပ်နိုင်မှာဖြစ်ပါတယ်။ Scholar အနေနဲ့ကတော့ ၄ နှစ်ကာလရမှာဖြစ်ပြီးတော့ကိုယ့်ကြိုးစားမှုအပေါ်မူတည်ပြီး allowance လဲပြန်လည်ရရှိနိုင်မှာပါ 💁‍♂️', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(4, 19, 'UTokyo ရဲ့အဓိက scholar အနေနဲ့ကတော့ Admission fee, Tuition, Living Expenses စုစုပေါင်းအနေနဲ့  💰 (JPY 126,000 for monthly) cover up လုပ်နိုင်မှာဖြစ်ပါတယ်။ Scholar အနေနဲ့ကတော့ ၄ နှစ်ကာလရမှာဖြစ်ပြီးတော့ကိုယ့်ကြိုးစားမှုအပေါ်မူတည်ပြီး allowance လဲပြန်လည်ရရှိနိုင်မှာပါ 💁‍♂️', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(5, 20, 'UTokyo ရဲ့အဓိက scholar အနေနဲ့ကတော့ Admission fee, Tuition, Living Expenses စုစုပေါင်းအနေနဲ့  💰 (JPY 126,000 for monthly) cover up လုပ်နိုင်မှာဖြစ်ပါတယ်။ Scholar အနေနဲ့ကတော့ ၄ နှစ်ကာလရမှာဖြစ်ပြီးတော့ကိုယ့်ကြိုးစားမှုအပေါ်မူတည်ပြီး allowance လဲပြန်လည်ရရှိနိုင်မှာပါ 💁‍♂️', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(7, 22, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(16, 32, 'Japanese Government (MEXT) Scholarship ကိုတော့ Maximum 8 Students ကို recommend ပေးသွားမှာဖြစ်ပြီး Entrance Fee (JPY 282,000) နဲ့ Annual Tuition’s JPY 535,800 (JPY 267,900 x 2) တို့အတွက် စဉ်းစားပေးသွားမယ့်အပြင် Living Stipend ကိုလည်း Economy air ticket to/from Japan အပါအဝင် 4 Years အတွက် JPY 119,000/month စီစဉ်ပေးသွားမှာဘဲဖြစ်ပါတယ် 👉 President Fellowship မှာဆိုရင် Examination Fee နဲ့ Entrance Fee (JPY 282,000) ကို After Enrollment မှာ Refunded လုပ်ပေးသွားဖို့အပြင် Living Stipend အတွက် Maximun 4 Years (JPY 267,900/term) ကိုပြင်ဆင်ပေးဖို့ရှိပြီး Students တွေအနေနဲ့ Tuition Fees ကိုလည်း Fully (or) Partially Funded ရဖို့ Apply လုပ်နိုင်ပါသေးတယ်… 👉 Privately Financed International Students တွေရဲ့ MEXT Honors Scholarship မှာတော့ Living Stipend (JPY 48,000/month) အတွက်ကို First 6 months (Oct. 2022 to Mar. 2023) ထောက်ပံ့ပေးသွားဖို့ ဘဲဖြစ်ပါတယ်…👍', '2021-08-19 01:06:06', '2021-08-19 01:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_application_date` datetime DEFAULT NULL,
  `deadline` datetime NOT NULL,
  `funding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organized_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` text COLLATE utf8mb4_unicode_ci,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `official_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`id`, `slug`, `title`, `image`, `start_application_date`, `deadline`, `funding`, `place`, `organized_by`, `details`, `other_information`, `field`, `official_website`, `apply_form_link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Umpire and Referee', 'https://via.placeholder.com/640x480.png/0000aa?text=corrupti', NULL, '2019-09-25 19:54:06', 'partial-funded', 'online', 'Bode-Stark', 'Rerum qui libero earum corrupti quam ea. Sed dicta molestias nihil inventore possimus. Qui aliquam illo aut necessitatibus voluptatem enim corporis. Qui vel in velit hic nobis ut.', NULL, 'Computer Science Teacher', 'http://kassulke.info/molestiae-ut-hic-error-totam', 'http://www.kling.com/pariatur-explicabo-expedita-eos-et-non.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, NULL, 'Historian', 'https://via.placeholder.com/640x480.png/00bb22?text=rem', NULL, '1972-12-01 19:04:31', 'partial-funded', 'online', 'Stark-Kunze', 'Ut veniam dolorem est dolore nesciunt id autem dolor. Ut esse cupiditate qui. Omnis qui ut sapiente unde iure natus non. Fugit voluptatem libero fugit aut.', NULL, 'TSA', 'http://www.sawayn.org/', 'http://sipes.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, NULL, 'Military Officer', 'https://via.placeholder.com/640x480.png/00cc22?text=exercitationem', NULL, '2001-10-03 06:16:18', 'fully-funded', 'Korea', 'Larkin-Stroman', 'Eos unde facere eius laborum. Dolorem debitis tempora vel aut veritatis quisquam. Iure numquam delectus dolorem vitae est tenetur ut. Sit fugiat quisquam eius et quidem.', NULL, 'Teacher Assistant', 'http://www.bednar.net/eius-commodi-velit-soluta', 'https://www.ritchie.com/aspernatur-aut-nam-mollitia', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, NULL, 'Pressing Machine Operator', 'https://via.placeholder.com/640x480.png/00ee44?text=voluptatem', NULL, '1994-05-12 15:01:53', 'partial-funded', 'French Southern Territories', 'Pagac, Bednar and Hintz', 'Omnis alias consequatur itaque quae quam quas qui. Quidem nihil voluptatem ea fuga. Eaque eum quibusdam eaque ut rerum qui qui.', NULL, 'Molder', 'http://damore.com/quis-ipsum-suscipit-molestias-ut-consequuntur-voluptatem.html', 'http://lindgren.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, NULL, 'Insurance Underwriter', 'https://via.placeholder.com/640x480.png/009988?text=quis', NULL, '2013-05-03 16:20:03', 'partial-funded', 'Eritrea', 'VonRueden-Maggio', 'Ab eveniet quam et excepturi architecto occaecati odit. Quidem id hic cumque adipisci nesciunt enim est. Commodi tempora similique et odio soluta et doloribus modi. Amet dolores maxime voluptates nam dolores qui. Expedita eum minus sequi distinctio vitae ratione qui.', NULL, 'Conveyor Operator', 'http://www.schuster.biz/', 'http://aufderhar.com/blanditiis-necessitatibus-autem-et-maxime-suscipit-debitis', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, NULL, 'Stringed Instrument Repairer and Tuner', 'https://via.placeholder.com/640x480.png/00bbff?text=error', NULL, '2017-11-18 14:25:48', 'self-funded', 'online', 'Stamm-O\'Hara', 'Eius ut alias omnis incidunt et vel ut et. Qui voluptate dolores reprehenderit quas consequatur dolores. Illo tenetur assumenda omnis et dolorem.', NULL, 'Music Arranger and Orchestrator', 'https://pagac.com/voluptatem-eum-aut-est-eum.html', 'http://www.howe.com/id-nesciunt-officiis-non-sit-ad', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, NULL, 'Criminal Investigator', 'https://via.placeholder.com/640x480.png/0011aa?text=consequatur', NULL, '1998-11-14 15:36:24', 'fully-funded', 'online', 'Yundt-Daniel', 'Similique voluptas at odio fuga. Maiores voluptas dolor minus numquam tempora. Ducimus labore unde in dolor eius. Atque ea neque quo in.', NULL, 'Textile Knitting Machine Operator', 'http://www.connelly.com/veniam-blanditiis-non-dolorem.html', 'http://koss.com/aut-est-et-sunt-nihil-sequi-ut-neque', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, NULL, 'Writer OR Author', 'https://via.placeholder.com/640x480.png/004499?text=commodi', NULL, '1971-11-04 01:08:59', 'fully-funded', 'online', 'Paucek LLC', 'Omnis fugit qui ut adipisci eligendi delectus. Velit quidem enim ut nam at voluptatem. Mollitia in aut recusandae fugiat ut. Repellat hic tempora et incidunt dolorem ipsum a.', NULL, 'Survey Researcher', 'http://www.kiehn.com/qui-et-aut-veritatis', 'http://www.mcclure.info/suscipit-voluptatem-ab-dignissimos-adipisci-dolores.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, NULL, 'Compensation and Benefits Manager', 'https://via.placeholder.com/640x480.png/00dd88?text=rem', NULL, '2020-07-10 11:15:53', 'self-funded', 'online', 'Cartwright-Koss', 'Eligendi aut culpa et quaerat libero. Non et aut atque accusantium ullam nobis temporibus. Voluptate possimus id et voluptatem.', NULL, 'Military Officer', 'http://haley.info/dolorem-autem-aspernatur-molestiae-recusandae', 'https://connelly.com/in-qui-qui-odit-aspernatur-quasi-dolores.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, NULL, 'Police and Sheriffs Patrol Officer', 'https://via.placeholder.com/640x480.png/0044aa?text=fuga', NULL, '1992-06-10 13:18:41', 'self-funded', 'online', 'Quitzon, Davis and Klein', 'Id asperiores similique soluta. Et quod ut reprehenderit sed quis eos doloremque. Quod earum doloribus sint.', NULL, 'Actuary', 'http://medhurst.com/', 'http://carter.org/non-sed-amet-facilis.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, NULL, 'Airfield Operations Specialist', 'https://via.placeholder.com/640x480.png/0099ff?text=sunt', NULL, '1977-11-30 15:29:55', 'self-funded', 'online', 'O\'Hara-Konopelski', 'Cum magni iure porro quo assumenda minus fugit. Aut dignissimos quas omnis ad voluptates omnis. Odio est quae aut consequuntur blanditiis.', NULL, 'Nutritionist', 'http://mertz.com/', 'http://ankunding.com/aspernatur-quasi-optio-delectus-aut', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, NULL, 'Central Office Operator', 'https://via.placeholder.com/640x480.png/0077bb?text=cumque', NULL, '1984-04-10 10:31:24', 'partial-funded', 'online', 'Anderson LLC', 'Illum dicta quia id tenetur et laudantium. Qui reprehenderit suscipit assumenda atque maxime eos dolor veritatis. Itaque dolores placeat in necessitatibus labore nulla.', NULL, 'Zoologists OR Wildlife Biologist', 'http://zboncak.com/nobis-quasi-delectus-cupiditate-sit-repellat-distinctio-inventore', 'https://johns.biz/dolorem-est-nulla-numquam-excepturi-consequatur-excepturi-reprehenderit.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, NULL, 'Makeup Artists', 'https://via.placeholder.com/640x480.png/001155?text=ut', NULL, '1997-10-28 16:26:04', 'self-funded', 'Aruba', 'Abbott, Wiegand and Weissnat', 'Eius ut eum sequi. Illum rerum sunt ratione eveniet. Repudiandae modi molestias ea accusamus nesciunt ut voluptatum.', NULL, 'Vice President Of Marketing', 'http://www.kris.net/repudiandae-reiciendis-nam-est-et-illo-repellendus-labore-beatae.html', 'http://feil.com/sint-saepe-amet-perferendis-dolor', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, NULL, 'Sketch Artist', 'https://via.placeholder.com/640x480.png/001199?text=minus', NULL, '2004-02-06 16:24:21', 'partial-funded', 'Nauru', 'Kerluke, Gaylord and Ebert', 'Voluptas alias voluptate eum. Rerum iste ex accusantium enim. Adipisci magni suscipit tempora ipsam inventore. Explicabo sit ut consequuntur et odio vel.', NULL, 'Gas Processing Plant Operator', 'http://johns.org/impedit-repellat-minima-molestiae-repudiandae-et.html', 'http://www.morissette.com/magni-accusamus-voluptatibus-qui-aut', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(15, NULL, 'Aerospace Engineer', 'https://via.placeholder.com/640x480.png/00aa99?text=iure', NULL, '2002-11-21 08:22:55', 'self-funded', 'Croatia', 'Eichmann, Howe and Hermann', 'Nostrum corrupti fugit quas repellendus eum. Accusamus error facilis dolorum sed non. Laboriosam aliquam animi odit aliquid. Maiores rerum quam omnis amet et rem.', NULL, 'Advertising Sales Agent', 'http://www.jakubowski.biz/delectus-quidem-minus-molestiae-qui-eos-quos', 'https://hansen.com/sunt-qui-ut-nihil-fuga.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(17, 'asian-conference-by-un', 'Asian Conference By UN', '6120a29d368a5jp_scholar.jpeg', '2021-09-11 00:00:00', '2021-09-16 00:00:00', 'Fully-Funded', 'Africa', 'Asian', 'Grab your chance to study at University of Tokyo ✨ (For Undergraduate Students) Hello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️ ကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။ ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ... University of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩 UTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ... Cultural Facilities တွေအနေနဲ့ဆို 📚 Library System 🏛️ Museum 🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။ Public Research Program တွေအတွက် ITO International Research', '❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ... Programs in English at Komaba ( PEAK) ပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့ \"International Program on Japan in East Asia\" နဲ့ \"International Program on Environmental Sciences\" ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် .... ဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့ Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်..... PEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ် ❗Application Period ❗ November 22 to December 22, 2021 ❗Application Fee 5,000 JPY 💸', 'Political', 'www.iup.kyoto-u.ac.jp', 'http://127.0.0.1:8000/admin/scholarship/create', '2021-08-21 00:19:53', '2021-08-21 09:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` datetime NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `taught_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timetable` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `slug`, `type`, `course_name`, `image`, `deadline`, `place`, `price`, `start_date`, `taught_by`, `details`, `course_duration`, `timetable`, `apply_form_link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'paid_course', 'Brokerage Clerk', 'https://via.placeholder.com/640x480.png/0055ee?text=rerum', '1974-06-09 15:39:08', 'Online', 28, '1991-11-05 20:44:04', 'Laverna Pacocha Sr.', 'Harum vero dolor repudiandae laudantium doloribus dolores. Autem qui maiores tempore voluptatem perspiciatis voluptatum magni eos. Sed aperiam magni iure provident.', '1977-02-20 - 1991-12-16', 'googlemeet', 'http://www.luettgen.com/exercitationem-veritatis-id-debitis-repellendus-aspernatur', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, NULL, 'paid_course', 'Waitress', 'https://via.placeholder.com/640x480.png/00cc44?text=consequuntur', '1991-09-04 15:56:33', 'Online', 12, '1974-09-25 10:30:33', 'Dr. Salma Graham V', 'Error veniam tenetur sequi. Et perferendis asperiores sint. Alias eos sunt consequuntur voluptate nobis sit ut.', '1993-08-24 - 2011-04-07', 'googlemeet', 'http://www.langworth.com/quia-et-voluptas-quidem-similique-quasi-in', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, NULL, 'free_course', 'Real Estate Association Manager', 'https://via.placeholder.com/640x480.png/00ddbb?text=et', '1984-03-24 04:02:40', 'Online', 94, '1994-01-03 10:39:28', 'Leda Champlin', 'Expedita iusto dignissimos deserunt dolor nobis amet. Nisi omnis laborum cupiditate provident nostrum. Pariatur fugiat totam consectetur amet alias.', '2001-01-18 - 1982-06-02', 'zoom', 'http://www.shields.com/molestiae-voluptas-delectus-provident-veritatis', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, NULL, 'paid_course', 'Ticket Agent', 'https://via.placeholder.com/640x480.png/00dd00?text=aperiam', '1996-10-09 02:44:13', 'Online', 80, '1993-09-09 14:11:31', 'Miss Wilhelmine West Sr.', 'Possimus et non vel impedit. Ipsum omnis et distinctio vel debitis alias fugiat eum. Praesentium iusto beatae velit animi impedit officiis. Illum dolorum error rerum laboriosam.', '1984-07-13 - 2020-01-27', 'googlemeet', 'http://emmerich.com/vel-ad-sint-beatae-est-illum-delectus.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, NULL, 'free_course', 'Aircraft Structure Assemblers', 'https://via.placeholder.com/640x480.png/005555?text=qui', '2003-03-24 03:05:00', 'Online', 13, '1993-04-02 13:52:31', 'Estell Hayes', 'Beatae qui facilis qui sapiente ipsa nulla nulla. Non laboriosam aut accusamus.', '1994-08-24 - 1987-06-11', 'zoom', 'http://bogan.info/eius-et-dolorem-molestias', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, NULL, 'free_course', 'Range Manager', 'https://via.placeholder.com/640x480.png/006655?text=ad', '2002-11-01 18:43:00', 'Online', 82, '1989-10-20 03:00:08', 'Prof. Raul Adams IV', 'Consequuntur neque delectus accusantium quo. Perferendis et expedita ducimus non omnis vel et. Eveniet praesentium repellendus magni animi. Qui modi veniam beatae molestiae odio magni eius.', '2015-10-26 - 2012-01-31', 'zoom', 'http://www.anderson.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, NULL, 'free_course', 'Library Science Teacher', 'https://via.placeholder.com/640x480.png/006699?text=rem', '2011-09-17 09:00:29', 'Online', 10, '2003-10-05 00:32:10', 'Emerald Considine', 'Ut et illo quia dignissimos eum. Porro magni temporibus distinctio perferendis culpa ut ut delectus. Voluptatibus inventore sit libero vel et consequatur et facilis. Eum porro ab similique id autem cumque et et.', '1980-07-20 - 1991-10-06', 'googlemeet', 'http://www.willms.com/repellat-sequi-blanditiis-sed-laborum-aliquid-laboriosam-inventore.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, NULL, 'paid_course', 'Insurance Claims Clerk', 'https://via.placeholder.com/640x480.png/005588?text=rem', '2012-02-06 22:32:49', 'Online', 14, '2015-04-29 08:11:44', 'Wilma Larson', 'Aliquid officia ullam occaecati eaque consequuntur. Reprehenderit veritatis dolores sequi veritatis fugiat ipsum. Odio et sed aliquid facilis. Voluptatem et maxime vel est.', '2009-09-02 - 1995-08-30', 'googlemeet', 'https://www.tromp.info/ea-nihil-rem-officiis', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, NULL, 'paid_course', 'Food Preparation Worker', 'https://via.placeholder.com/640x480.png/0066ee?text=quos', '1970-10-01 12:44:17', 'Online', 42, '2006-01-01 01:24:53', 'Katrine Hyatt Jr.', 'Voluptas facilis ad ad ullam. Repellat vitae eum eius laudantium. Eius molestiae sint excepturi quia. Consequatur harum explicabo nobis molestiae dolorum.', '1995-07-12 - 1991-01-26', 'zoom', 'http://www.leannon.info/id-consequatur-autem-amet-ad-consequuntur.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, NULL, 'free_course', 'Clerk', 'https://via.placeholder.com/640x480.png/00dd44?text=quis', '1976-04-07 21:25:29', 'Online', 81, '2005-05-25 09:48:29', 'Mya Grady', 'Quae aut corrupti rerum quia qui autem a fugiat. Nemo esse cum velit sapiente aut labore expedita. Eum voluptatum laboriosam est. Voluptatum odio perspiciatis nisi iusto quae.', '1997-06-27 - 1972-11-09', 'zoom', 'https://www.keebler.biz/repellat-deserunt-molestiae-adipisci-aliquam', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, NULL, 'paid_course', 'Municipal Fire Fighting Supervisor', 'https://via.placeholder.com/640x480.png/00ccbb?text=ut', '1978-12-04 19:06:40', 'Online', 7, '1972-06-27 20:07:03', 'Earlene Rippin I', 'Vero et rerum ut ratione nobis ex aut nihil. Qui neque nam voluptatem enim. Beatae aut quis in harum ut natus. Qui qui ipsa vero voluptas eaque.', '2011-03-18 - 2010-05-25', 'googlemeet', 'http://www.considine.biz/quibusdam-et-non-totam-nulla', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, NULL, 'paid_course', 'Musician OR Singer', 'https://via.placeholder.com/640x480.png/002222?text=porro', '1972-07-09 10:20:06', 'Online', 99, '2008-05-30 12:39:55', 'Halle Effertz Sr.', 'Est quia commodi totam est qui reiciendis. Consequatur laudantium numquam voluptas sit. Voluptatum dolores reprehenderit eos magnam.', '1988-06-17 - 2001-11-02', 'zoom', 'https://macejkovic.org/et-tempora-minima-iusto-sed-saepe-nam-exercitationem.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, NULL, 'free_course', 'Electrotyper', 'https://via.placeholder.com/640x480.png/00cc22?text=est', '2008-07-23 03:22:53', 'Online', 82, '1986-04-18 12:17:29', 'Shaniya Blanda', 'Necessitatibus rerum rem magnam minima esse beatae omnis rerum. Voluptates omnis quas vero. Eum magnam facere ducimus ipsum et quae. Optio saepe sequi id nulla.', '1984-09-27 - 1989-03-15', 'googlemeet', 'http://considine.info/id-doloribus-corporis-et-cupiditate-voluptatibus-iure-accusamus.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, NULL, 'free_course', 'Office Machine and Cash Register Servicer', 'https://via.placeholder.com/640x480.png/001199?text=dignissimos', '2006-04-04 16:22:12', 'Online', 3, '2007-09-21 17:42:21', 'Johnnie Gerhold DDS', 'Eaque sit facere velit ut rerum quia commodi. Et officiis repellendus dolorum qui esse nihil qui. Et fuga perferendis consequatur aut quia perspiciatis omnis. Voluptate dolorem et quia dignissimos in.', '2015-05-12 - 1980-09-01', 'googlemeet', 'http://www.lowe.com/quidem-repellendus-sed-excepturi-aliquam-in-quaerat-nostrum', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(15, NULL, 'free_course', 'Drilling and Boring Machine Tool Setter', 'https://via.placeholder.com/640x480.png/007722?text=eligendi', '2004-02-01 12:37:16', 'Online', 96, '1987-03-18 10:18:37', 'Lauren Crooks Sr.', 'Deleniti enim deleniti dolor. Voluptatibus voluptate ut esse voluptate ut quia omnis velit. Ipsum esse est enim illum. Pariatur qui sed fuga quisquam sed sapiente.', '2016-09-01 - 1973-11-11', 'zoom', 'http://emmerich.org/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(16, 'korean-language', 'paid_course', 'Korean Language', '61210e68da3fbcourse.jpeg', '2021-08-21 00:00:00', 'Offline', 40000, '2021-08-24 00:00:00', 'Dr. May', 'English ဘာသာကိုစိတ်၀င်စားကြတဲ့ TYTimers တို့အတွက် ...\r\nအလုပ်အကိုင်အခွင့်အလမ်းကောင်းတွေရရှိစေဖို့နဲ့ \r\nနိုင်ငံခြား‌ကျောင်းတွေမှာ Scholarship လျှောက်ဖို့ \r\nအလိုအပ်ဆုံးနဲ့ အခြေခံကျဆုံးက\r\nEnglish Proficiency ပဲ ဖြစ်ပါတယ် ... 💁\r\nများသောအားဖြင့် Study abroad လုပ်တဲ့အခါမှာ \r\nကိုယ်သင်ရတဲ့ သင်ခန်းစာတွေ၊ ဆရာတွေနဲ့ \r\nဆက်သွယ်ရတာတွေ၊ အတန်းဖော် သူငယ်ချင်းတွေနဲ့ စကားပြောဆိုရတာတွေဟာ Bachelor သမားများတင်မကဘဲ Master, PhD ကျောင်းသားတွေအတွက်ကတော့ပိုပြီး challenging ဖြစ်တဲ့ Thesis, Assignments, Project ကို English လို လုံးပမ်းရမှာပါ ... 🌚\r\nဒီလိုမျိုးတစ်ချိန်မှာ ကိုယ်တွေ့ကြုံရနိုင်တဲ့ ဘာသာစကား အခက်အခဲတွေကို အခုကတည်းကနေ ကြိုပြီး ဖြေရှင်းထားရင် ကျောင်းလျှောက်တဲ့အခါမှာ ကိုယ့်ကိုယ်လည်း ယုံကြည်မှု ပိုရှိလာမှာ ဖြစ်ပြီး ပညာသင်ဆုရဖို့လည်း ပိုပြီး အခွင့်အရေးများစေမှာ ဖြစ်ပါတယ် ... 😅\r\nဒါကြောင့် TYT အနေနဲ့ ကျောင်းသားလူငယ်တွေအတွက် အခွင့်ထူးတစ်ခု ဖန်တီးပေးလိုက်ပါတယ်၊\r\nအဲ့ဒါကတော့ Scholarship အတွေ့အကြုံကောင်းကောင်းရှိပြီး International Education Standard ကို ထိတွေ့ခဲ့တဲ့ Tr.Mary ရဲ့ “ Intensive English Speaking & Writing Course ” (Zoom Class) ကို \r\nစတင်ဖွင့်လှစ်ပေးမှာ ဖြစ်ပါတယ် ... 🥳\r\n👩🏻‍🏫Tr. Mary က B.Ed,M.Ed ရရှိထားပြီး စာသင်တဲ့ Experienced အပြင် \r\nMaster of Development Studies Major နဲ့ \r\n🇦🇺University of Melbourne, Australia🇦🇺မှ \r\nပညာသင်ဆုဖြင့်ရရှိခဲ့ပြီးဖြစ်ပါတယ်။\r\nInternational Education Style နဲ့ Familiar ဖြစ်ပြီးအတွေ့အကြုံများတဲ့သူမို့ လူငယ်တွေကို English စာဘဲ Train ပေးမှာမဟုတ်ဘဲ Oversea Universities တွေမှာ\r\nမြန်မာကျောင်းသားတွေ အဓိကတွေကြုံရတဲ့ Challenges တွေဖြစ်တဲ့  ❓❓❓\r\n🤔 Critical thinking \r\n📃 Researching \r\n😎 Confidence Building \r\n📂 Structuring essays and reports\r\n🤓 Analyzing and Comprehension \r\n👥 Presenting and Networking\r\n👌Effective Study \r\nစတဲ့ diverse learning styles တွေနဲ့ Pro ကျကျ Train ပေးသွားမှာပါ ...🙋🏻‍♂️🙋🏻‍♂️🙋🏻‍♂️\r\n⚠️English စာတင်မဟုတ်ဘဲ International သွားရင်လိုအပ်နေတဲ့ Skills တွေကို ဒီလို Fees နဲ့ ဘယ်သင်တန်းမှာမှမရနိုင်ပါဘူး ⚠️ \r\nနောက်ပြီးအပေါ်က Learning Style တွေကို ကြည့်ပြီး ငါတက်လို့ ဖြစ်ပါ့မလားလို့ 🥺 တွေးနေပြီဆိုရင် \r\nအခုရပ်လိုက်ပါတော့ ခင်ဗျာ … 🤗\r\n✅English စာကို အခြေခံရှိထားတဲ့ အခုစာဖတ်နေတဲ့သူအနေနဲ့ ယုံကြည်ချက်ရှိရှိ တက်ရောက်လို့ရပါတယ်၊\r\n✅ Tr. က မြန်မာကျောင်းသားအများစုရဲ့ လိုအပ်ချက်ကို ဖြည့်ဆည်းပေးချင်တာကြောင့် အခြေခံကနေပဲ စပြီး တဖြည်းဖြည်း သင်ကြားပေးသွားမှာပါ ... 🙆\r\nစိတ်ဝင်စားပြီး Fees နဲ့ တက်ရောက်ချင်ရင် အောက်က Google Form ဖြည့်ပြီး လျှောက်ထားနိုင်ပါပြီ ... \r\n👇👇👇\r\nhttps://docs.google.com/.../16qonnGjP_VMMelMuVf9.../edit\r\n🚨ဒီသင်တန်းကို တက်ရောက်ချင်သော်လည်း ‌အကြောင်းအမျိုးမျိုးကြောင့် မတက်ရောက်နိုင်တဲ့ TYTimers များအတွက် scholarship ပေးမှာဖြစ်ပါတယ် ...\r\nတကယ်လိုအပ်နေတဲ့ ကျောင်းသားများထဲက အသင့်တော်ဆုံး (၃) ယောက်ကို ရွေးချယ်ပြီး ‌scholarship ပေးမှာမို့ ..\r\nScholarship‌ လျှောက်မယ့် ကျောင်းသားများသာ အောက်က Form👇 မှာ ပညာသင်ဆုလျှောက်ထားပေးပါခင်ဗျာ🚨\r\nhttps://docs.google.com/.../1Z0-WKgUa9eKM.../edit\r\nလူပြည့်တာနဲ့ Form ပိတ်မှာမို့ Enrollment ကို အမြန်ပြုလုပ်ဖို့ လိုအပ်ပါတယ် ... 🏃\r\n🚫Limited Seats 25 Only', '2', 'Sat, Sun (10:00 to 11:30 AM), Wed (04:30 to 06:00 PM)', 'https://www.facebook.com/takeyourtimemyanmar', '2021-08-21 08:02:08', '2021-08-21 09:02:50'),
(17, 'intensive-speaking-writing', 'paid_course', 'Intensive Speaking & Writing', '61211e4026980course.jpeg', '2021-08-21 00:00:00', 'Online', 40000, '2021-08-24 00:00:00', 'Dr. Christ', 'English ဘာသာကိုစိတ်၀င်စားကြတဲ့ TYTimers တို့အတွက် ...\r\nအလုပ်အကိုင်အခွင့်အလမ်းကောင်းတွေရရှိစေဖို့နဲ့ \r\nနိုင်ငံခြား‌ကျောင်းတွေမှာ Scholarship လျှောက်ဖို့ \r\nအလိုအပ်ဆုံးနဲ့ အခြေခံကျဆုံးက\r\nEnglish Proficiency ပဲ ဖြစ်ပါတယ် ... 💁\r\nများသောအားဖြင့် Study abroad လုပ်တဲ့အခါမှာ \r\nကိုယ်သင်ရတဲ့ သင်ခန်းစာတွေ၊ ဆရာတွေနဲ့ \r\nဆက်သွယ်ရတာတွေ၊ အတန်းဖော် သူငယ်ချင်းတွေနဲ့ စကားပြောဆိုရတာတွေဟာ Bachelor သမားများတင်မကဘဲ Master, PhD ကျောင်းသားတွေအတွက်ကတော့ပိုပြီး challenging ဖြစ်တဲ့ Thesis, Assignments, Project ကို English လို လုံးပမ်းရမှာပါ ... 🌚\r\nဒီလိုမျိုးတစ်ချိန်မှာ ကိုယ်တွေ့ကြုံရနိုင်တဲ့ ဘာသာစကား အခက်အခဲတွေကို အခုကတည်းကနေ ကြိုပြီး ဖြေရှင်းထားရင် ကျောင်းလျှောက်တဲ့အခါမှာ ကိုယ့်ကိုယ်လည်း ယုံကြည်မှု ပိုရှိလာမှာ ဖြစ်ပြီး ပညာသင်ဆုရဖို့လည်း ပိုပြီး အခွင့်အရေးများစေမှာ ဖြစ်ပါတယ် ... 😅\r\nဒါကြောင့် TYT အနေနဲ့ ကျောင်းသားလူငယ်တွေအတွက် အခွင့်ထူးတစ်ခု ဖန်တီးပေးလိုက်ပါတယ်၊\r\nအဲ့ဒါကတော့ Scholarship အတွေ့အကြုံကောင်းကောင်းရှိပြီး International Education Standard ကို ထိတွေ့ခဲ့တဲ့ Tr.Mary ရဲ့ “ Intensive English Speaking & Writing Course ” (Zoom Class) ကို \r\nစတင်ဖွင့်လှစ်ပေးမှာ ဖြစ်ပါတယ် ... 🥳\r\n👩🏻‍🏫Tr. Mary က B.Ed,M.Ed ရရှိထားပြီး စာသင်တဲ့ Experienced အပြင် \r\nMaster of Development Studies Major နဲ့ \r\n🇦🇺University of Melbourne, Australia🇦🇺မှ \r\nပညာသင်ဆုဖြင့်ရရှိခဲ့ပြီးဖြစ်ပါတယ်။\r\nInternational Education Style နဲ့ Familiar ဖြစ်ပြီးအတွေ့အကြုံများတဲ့သူမို့ လူငယ်တွေကို English စာဘဲ Train ပေးမှာမဟုတ်ဘဲ Oversea Universities တွေမှာ\r\nမြန်မာကျောင်းသားတွေ အဓိကတွေကြုံရတဲ့ Challenges တွေဖြစ်တဲ့  ❓❓❓\r\n🤔 Critical thinking \r\n📃 Researching \r\n😎 Confidence Building \r\n📂 Structuring essays and reports\r\n🤓 Analyzing and Comprehension \r\n👥 Presenting and Networking\r\n👌Effective Study \r\nစတဲ့ diverse learning styles တွေနဲ့ Pro ကျကျ Train ပေးသွားမှာပါ ...🙋🏻‍♂️🙋🏻‍♂️🙋🏻‍♂️\r\n⚠️English စာတင်မဟုတ်ဘဲ International သွားရင်လိုအပ်နေတဲ့ Skills တွေကို ဒီလို Fees နဲ့ ဘယ်သင်တန်းမှာမှမရနိုင်ပါဘူး ⚠️ \r\nနောက်ပြီးအပေါ်က Learning Style တွေကို ကြည့်ပြီး ငါတက်လို့ ဖြစ်ပါ့မလားလို့ 🥺 တွေးနေပြီဆိုရင် \r\nအခုရပ်လိုက်ပါတော့ ခင်ဗျာ … 🤗\r\n✅English စာကို အခြေခံရှိထားတဲ့ အခုစာဖတ်နေတဲ့သူအနေနဲ့ ယုံကြည်ချက်ရှိရှိ တက်ရောက်လို့ရပါတယ်၊\r\n✅ Tr. က မြန်မာကျောင်းသားအများစုရဲ့ လိုအပ်ချက်ကို ဖြည့်ဆည်းပေးချင်တာကြောင့် အခြေခံကနေပဲ စပြီး တဖြည်းဖြည်း သင်ကြားပေးသွားမှာပါ ... 🙆\r\nစိတ်ဝင်စားပြီး Fees နဲ့ တက်ရောက်ချင်ရင် အောက်က Google Form ဖြည့်ပြီး လျှောက်ထားနိုင်ပါပြီ ... \r\n👇👇👇\r\nhttps://docs.google.com/.../16qonnGjP_VMMelMuVf9.../edit\r\n🚨ဒီသင်တန်းကို တက်ရောက်ချင်သော်လည်း ‌အကြောင်းအမျိုးမျိုးကြောင့် မတက်ရောက်နိုင်တဲ့ TYTimers များအတွက် scholarship ပေးမှာဖြစ်ပါတယ် ...\r\nတကယ်လိုအပ်နေတဲ့ ကျောင်းသားများထဲက အသင့်တော်ဆုံး (၃) ယောက်ကို ရွေးချယ်ပြီး ‌scholarship ပေးမှာမို့ ..\r\nScholarship‌ လျှောက်မယ့် ကျောင်းသားများသာ အောက်က Form👇 မှာ ပညာသင်ဆုလျှောက်ထားပေးပါခင်ဗျာ🚨\r\nhttps://docs.google.com/.../1Z0-WKgUa9eKM.../edit\r\nလူပြည့်တာနဲ့ Form ပိတ်မှာမို့ Enrollment ကို အမြန်ပြုလုပ်ဖို့ လိုအပ်ပါတယ် ... 🏃\r\n🚫Limited Seats 25 Only', '2', 'Sat, Sun (10:00 to 11:30 AM), Wed (04:30 to 06:00 PM)', 'https://www.facebook.com/takeyourtimemyanmar', '2021-08-21 08:05:45', '2021-08-21 09:09:44'),
(21, 'uo-people', 'paid_course', 'UO People', '612121f509590Basic Frontend Web Development (1).png', '2021-08-03 00:00:00', 'Africa', 50000, '2021-08-19 00:00:00', 'Amarica Native', 'Course', '2 month', 'Sat, Sun (10:00 to 11:30 AM), Wed (04:30 to 06:00 PM)', 'https://www.facebook.com/takeyourtimemyanmar', '2021-08-21 09:25:33', '2021-08-21 09:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_conferences`
--

CREATE TABLE `criteria_conferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conference_id` bigint(20) UNSIGNED NOT NULL,
  `criteria` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteria_conferences`
--

INSERT INTO `criteria_conferences` (`id`, `conference_id`, `criteria`, `created_at`, `updated_at`) VALUES
(17, 17, 'Asian', '2021-08-21 09:02:01', '2021-08-21 09:02:01'),
(18, 17, 'Criteria', '2021-08-21 09:02:01', '2021-08-21 09:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_grants`
--

CREATE TABLE `criteria_grants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grant_id` bigint(20) UNSIGNED NOT NULL,
  `criteria` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteria_grants`
--

INSERT INTO `criteria_grants` (`id`, `grant_id`, `criteria`, `created_at`, `updated_at`) VALUES
(31, 16, 'Official School Transcripts', '2021-08-20 11:23:54', '2021-08-20 11:23:54'),
(32, 16, 'Basic Qualification ကတော့ 12-years (of education) ကို Non-Japanese-System အရ ပြီးမြောက်ထားဖို့ လိုအပ်ပြီး တကယ်လို့ 11-years ဖြစ်နေရင်လည်း ကိုယ့်ရဲ့ Education History ကို ကြည့်ပြီး Eligibility အတွက် စဉ်းစားပေးသွားမှာပါ…', '2021-08-20 11:23:54', '2021-08-20 11:23:54'),
(33, 16, 'For an English Proficiency Test 📝  ✅ TOEFL iBT Home Edition  www.ets.org/s/cv/toefl/at-home ✅ IELTS Indicator www.ieltsindicator.com အနည်းဆုံးဘယ်လောက်ရ ရမယ်ဆိုပြိီး သတ်မှတ်မထားပေမယ့် ပုံမှန်အားဖြင့် successful candidate တွေရဲ့score တွေကိုတော့ အောက်ပါအတိုင်းဖော်ပြပေးထားပါတယ်။   ✔️ TOEFL iBT: 90  ✔️ TOEFL PBT: 580 ✔️ IELTS: 6.5 ❗️Note: November 1, 2019 နောက်ပိုင်းဖြေဆိုထားတဲ့ English Proficiency Test Result တွေပဲလက်ခံမှာဖြစ်ပါတယ်။❗️', '2021-08-20 11:23:54', '2021-08-20 11:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_jobs`
--

CREATE TABLE `criteria_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `criteria` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteria_jobs`
--

INSERT INTO `criteria_jobs` (`id`, `job_id`, `criteria`, `created_at`, `updated_at`) VALUES
(19, 17, 'Official School Transcripts', '2021-08-22 02:51:35', '2021-08-22 02:51:35'),
(20, 17, 'Basic Qualification ကတော့ 12-years (of education) ကို Non-Japanese-System အရ ပြီးမြောက်ထားဖို့ လိုအပ်ပြီး တကယ်လို့ 11-years ဖြစ်နေရင်လည်း ကိုယ့်ရဲ့ Education History ကို ကြည့်ပြီး Eligibility အတွက် စဉ်းစားပေးသွားမှာပါ…', '2021-08-22 02:51:35', '2021-08-22 02:51:35'),
(21, 19, 'Official School Transcripts', '2021-08-22 03:01:35', '2021-08-22 03:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_others`
--

CREATE TABLE `criteria_others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `other_id` bigint(20) UNSIGNED NOT NULL,
  `criteria` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteria_others`
--

INSERT INTO `criteria_others` (`id`, `other_id`, `criteria`, `created_at`, `updated_at`) VALUES
(7, 18, 'Basic Qualification ကတော့ 12-years (of education) ကို Non-Japanese-System အရ ပြီးမြောက်ထားဖို့ လိုအပ်ပြီး တကယ်လို့ 11-years ဖြစ်နေရင်လည်း ကိုယ့်ရဲ့ Education History ကို ကြည့်ပြီး Eligibility အတွက် စဉ်းစားပေးသွားမှာပါ…', '2021-08-22 06:24:50', '2021-08-22 06:24:50'),
(8, 18, 'Official School Transcripts', '2021-08-22 06:24:50', '2021-08-22 06:24:50'),
(11, 17, 'Basic Qualification ကတော့ 12-years (of education) ကို Non-Japanese-System အရ ပြီးမြောက်ထားဖို့ လိုအပ်ပြီး တကယ်လို့ 11-years ဖြစ်နေရင်လည်း ကိုယ့်ရဲ့ Education History ကို ကြည့်ပြီး Eligibility အတွက် စဉ်းစားပေးသွားမှာပါ…', '2021-08-22 06:26:18', '2021-08-22 06:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_scholarships`
--

CREATE TABLE `criteria_scholarships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scholarship_id` bigint(20) UNSIGNED NOT NULL,
  `criteria` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteria_scholarships`
--

INSERT INTO `criteria_scholarships` (`id`, `scholarship_id`, `criteria`, `created_at`, `updated_at`) VALUES
(1, 10, 'Sit eligendi nulla laboriosam tenetur velit. Nostrum pariatur quidem architecto. Tenetur occaecati in inventore ut eaque reiciendis nam eius. Inventore ab est illo ex et iusto quia perferendis.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, 4, 'Eius similique itaque atque sint commodi dolores. Fugit voluptate quam dolorum ipsum accusantium pariatur. Tempora ut porro atque molestias et qui nam consectetur.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, 14, 'Totam voluptatem dolorem ut mollitia voluptatem et maiores. Est nam consequatur atque rerum ducimus facilis saepe dicta. Deleniti alias velit animi fugit expedita dolores ut. Quis dolores sit provident dicta impedit.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, 12, 'Quo in ad at sit culpa. Fugit consequatur minus molestias omnis. Alias consequatur quia dicta quia deserunt temporibus. Ducimus est ullam voluptatem molestias et.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, 14, 'Et cupiditate cupiditate enim consequatur. Rem omnis temporibus omnis quia non et quis a. Adipisci nesciunt non reprehenderit ut amet.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, 6, 'Aperiam nulla et sequi quo sint perferendis odio. Eos est iure et. Quas repellat deserunt odit deleniti veniam.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, 5, 'Illum cupiditate quaerat voluptas nisi esse aut. Commodi consequatur inventore voluptatibus aut accusantium recusandae aspernatur molestiae. Voluptatibus illum id deleniti illo nostrum consequatur. Impedit quo et commodi et atque.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, 11, 'Officiis molestiae corporis est aut perferendis tempora. Ut atque dolore suscipit explicabo harum sint excepturi. Sint est similique velit iste quibusdam soluta cupiditate. Quis id omnis autem illum.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, 8, 'Maiores cupiditate illum corrupti omnis omnis consequatur. Deserunt rerum nobis et qui. Exercitationem accusamus distinctio velit distinctio. Quas quo vel quasi qui eos fugit quidem.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, 6, 'Velit numquam eligendi vitae odio incidunt est rerum velit. Eligendi aut voluptatem ipsum tenetur dolores. Sit et est praesentium molestiae earum sit.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, 16, 'Official School Transcripts', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(12, 16, 'Official Examination Results for Academic Ability (Standardized Examinations)', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(13, 16, 'Official Test Scores for English Proficiency', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(14, 16, 'Certificate of (Expected) Graduation', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(15, 16, 'School Profiles (if applicable)', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(16, 16, 'Other Documentary Evidence of Achievements (if applicable)', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(17, 16, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(25, 18, 'Official School Transcripts', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(26, 18, 'Official Examination Results for Academic Ability (Standardized Examinations)', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(27, 18, 'Official Test Scores for English Proficiency', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(28, 18, 'Certificate of (Expected) Graduation', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(29, 18, 'School Profiles (if applicable)', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(30, 18, 'Other Documentary Evidence of Achievements (if applicable)', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(31, 18, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(32, 19, 'Official School Transcripts', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(33, 19, 'Official Examination Results for Academic Ability (Standardized Examinations)', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(34, 19, 'Official Test Scores for English Proficiency', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(35, 19, 'Certificate of (Expected) Graduation', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(36, 19, 'School Profiles (if applicable)', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(37, 19, 'Other Documentary Evidence of Achievements (if applicable)', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(38, 19, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(39, 20, 'Official School Transcripts', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(40, 20, 'Official Examination Results for Academic Ability (Standardized Examinations)', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(41, 20, 'Official Test Scores for English Proficiency', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(42, 20, 'Certificate of (Expected) Graduation', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(43, 20, 'School Profiles (if applicable)', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(44, 20, 'Other Documentary Evidence of Achievements (if applicable)', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(45, 20, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(53, 22, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(54, 22, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(55, 22, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(56, 22, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(57, 22, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(58, 22, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(59, 22, 'https://peak.c.u-tokyo.ac.jp/apply/admissiondownloads/index.', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(87, 32, 'Basic Qualification ကတော့ 12-years (of education) ကို Non-Japanese-System အရ ပြီးမြောက်ထားဖို့ လိုအပ်ပြီး တကယ်လို့ 11-years ဖြစ်နေရင်လည်း ကိုယ့်ရဲ့ Education History ကို ကြည့်ပြီး Eligibility အတွက် စဉ်းစားပေးသွားမှာပါ…', '2021-08-19 01:06:06', '2021-08-19 01:06:06'),
(88, 32, 'Academic Requirements အရ Applicant ဟာ 👉 English proficiency – (TOEFL iBT® 79+/TOEFL iBT® Home Edition 79+/or IELTS™ Academic 6.0+) ရရှိထားဖို့ နဲ့  👉 Standardized Examination Scores အတွက် Mathematics၊ Physics အပါအဝင် Chemistry (or Biology for AMB) တွေမှာ * SAT Subject Tests၊ GCE A-Levels၊ IB၊ ACT without Writing or AP ရှိနေဖို့ လိုအပ်ပါတယ် ခင်ဗျ…', '2021-08-19 01:06:06', '2021-08-19 01:06:06'),
(89, 32, 'အခုလို Requirements နဲ့ ပတ်သက်ပြီးတော့ ပိုပြီး အသေးစိတ် သွားနိုင်ဖို့ အတွက် “Application Guideline” (PDF File) ထဲက “4. Eligibility for FGL” ဆိုတဲ့ အပိုင်းလေးကို ဝင်ရောက်ဖတ်ရှု လို့ရပါတယ်…💁 📒*Note* အနေနဲ့ IELTS Indicator အပါအဝင် TOEFL ITP ® Plus for China တို့ကရရှိတဲ့ Scores တွေကိုတော့ လက်ခံမှာမဟုတ်တဲ့ အတွက် သတိပြုစေချင်ပါတယ် ခင်ဗျ…', '2021-08-19 01:06:06', '2021-08-19 01:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `document_jobs`
--

CREATE TABLE `document_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `document` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_jobs`
--

INSERT INTO `document_jobs` (`id`, `job_id`, `document`, `created_at`, `updated_at`) VALUES
(9, 17, 'CV Form', '2021-08-22 02:51:35', '2021-08-22 02:51:35'),
(10, 19, 'CV Form', '2021-08-22 03:01:35', '2021-08-22 03:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fellowships`
--

CREATE TABLE `fellowships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scholarship_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_application_date` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `funding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `given_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `official_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fellowships`
--

INSERT INTO `fellowships` (`id`, `scholarship_id`, `slug`, `type`, `title`, `image`, `start_application_date`, `deadline`, `funding`, `country`, `given_by`, `details`, `official_website`, `apply_form_link`, `other_information`, `created_at`, `updated_at`) VALUES
(1, 4, 'meat-packer', 'Fellowship', 'Operating Engineer', 'https://via.placeholder.com/640x480.png/00ccdd?text=blanditiis', '2003-10-02 21:46:57', '1972-08-11 20:01:34', 'partial-funded', 'Northern Mariana Islands', 'Thompson-Bayer', 'Ex molestiae est sit exercitationem corporis. Est placeat et est aliquam aut recusandae ut facilis. Nobis quam libero sed rem praesentium.', 'http://www.schoen.biz/vitae-eum-dolor-quia-non-rerum-et', 'http://www.gorczany.com/aliquam-quaerat-nam-laudantium-sit-aut-dolores', 'Ea est consequatur voluptatem dolorem similique saepe quis libero. Eos voluptas in et et. Dicta ut est quia natus culpa id.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, 1, 'pastry-chef', 'Fellowship', 'Machine Operator', 'https://via.placeholder.com/640x480.png/00ffaa?text=debitis', '1998-10-01 21:19:15', '1984-04-14 19:53:42', 'self-funded', 'Serbia', 'Gutmann LLC', 'Rerum incidunt est est perferendis. Rerum in non consequatur cumque. Voluptatem consequatur dolorum natus libero eius voluptas. Ad velit sed commodi odio est.', 'http://mckenzie.com/repellendus-odio-quia-dolore-ut-quaerat-esse-maxime', 'http://anderson.com/ea-error-consequatur-provident-nam-aspernatur-sed-ea', 'Fugit quia enim voluptatem in fugit. Nihil placeat consequatur repellat nihil iure minima natus ab. Quae inventore distinctio quo et vel tempora necessitatibus.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, 1, 'manager-tactical-operations', 'Fellowship', 'Armored Assault Vehicle Officer', 'https://via.placeholder.com/640x480.png/00aaee?text=repudiandae', '1994-10-10 05:34:56', '1995-02-11 10:09:56', 'self-funded', 'Suriname', 'Kiehn-Hirthe', 'Incidunt deserunt et maxime ea mollitia. Commodi consequatur iste alias ducimus nihil accusamus atque at. Laudantium praesentium ut eveniet. Perspiciatis rem qui veniam explicabo incidunt. Ex nesciunt recusandae dolor et dolorem eveniet.', 'http://bode.org/laboriosam-odio-nobis-quo-consequuntur-dolore-culpa', 'http://hagenes.com/', 'Maiores deleniti et qui. Consectetur voluptatem veniam qui laudantium dolorem. Autem ut ea et dolorum necessitatibus consequatur qui vel. Consequuntur sapiente a saepe aut quam animi est.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, 6, 'network-systems-analyst', 'Fellowship', 'Metal-Refining Furnace Operator', 'https://via.placeholder.com/640x480.png/00ee11?text=est', '2017-09-08 12:51:22', '1996-06-11 12:45:15', 'fully-funded', 'Guatemala', 'Barrows LLC', 'Iusto non nobis reiciendis dolorem in eos. Dolor similique repudiandae quia. Dolorem odio odio rerum.', 'http://www.fisher.com/molestiae-ab-voluptatibus-nemo-quod', 'http://www.purdy.org/eligendi-sed-nam-vel-placeat-alias', 'Aliquid non deserunt autem iusto. Qui impedit hic qui autem.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, 5, 'brickmason', 'Fellowship', 'Dental Hygienist', 'https://via.placeholder.com/640x480.png/0099bb?text=reprehenderit', '1992-05-17 05:46:38', '2007-03-20 15:43:31', 'partial-funded', 'Aruba', 'Pagac-Heller', 'Possimus sequi consequatur tempore laudantium excepturi delectus. Voluptas repellat non fuga dolorum. Illo enim rem eum sapiente dolores rerum autem.', 'http://www.wiegand.org/quibusdam-ea-ad-nihil-iusto-voluptate', 'http://zboncak.com/excepturi-quidem-ut-nisi-maxime-et', 'Dolorum unde cum nisi nam ex omnis perferendis. Et et quia facilis accusamus corrupti laudantium enim. Et debitis et dolores ipsum dolorem deleniti et. Molestias in sequi accusantium molestiae. Eveniet atque eius eligendi amet perferendis iusto soluta.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, 5, 'motor-vehicle-operator', 'Fellowship', 'Occupational Health Safety Technician', 'https://via.placeholder.com/640x480.png/007788?text=et', '1999-03-20 01:17:23', '2009-11-29 06:50:04', 'partial-funded', 'Ukraine', 'Grady-Wuckert', 'Quia voluptatem aut repellat ipsa est quia. Tenetur aperiam vitae facilis iste ab totam. Enim aut velit hic omnis velit impedit.', 'http://skiles.com/sit-illum-velit-non-rerum.html', 'http://www.mohr.info/ea-molestiae-quis-id-dolores-ut', 'Fuga aut totam repudiandae itaque eum. Rerum ipsum et qui omnis quasi. Voluptas consequuntur itaque consequatur quia fugit aperiam. Consequatur voluptatem quos aliquid ipsa molestiae sed. Et ipsam et esse esse quia et voluptatum.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, 13, 'cashier', 'Fellowship', 'Textile Knitting Machine Operator', 'https://via.placeholder.com/640x480.png/00ee99?text=odit', '1990-09-15 01:28:40', '1989-11-28 10:17:19', 'self-funded', 'Indonesia', 'Lubowitz, Daugherty and Wisoky', 'Eaque consequatur ut fugit voluptatem similique sed. Accusamus sed soluta esse. Aliquam facilis aut dolores error non.', 'https://muller.com/quia-sed-nesciunt-nisi-libero.html', 'http://www.spinka.com/non-dolorum-magnam-similique-cupiditate-nemo-voluptatibus.html', 'Quo reprehenderit cumque consequuntur quam et. Dolorem itaque rerum a. Qui nihil nihil deserunt inventore. Voluptatem ipsam aut blanditiis harum soluta iste.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, 14, 'athletic-trainer', 'Fellowship', 'Military Officer', 'https://via.placeholder.com/640x480.png/0033aa?text=qui', '2013-04-14 05:02:25', '2020-11-28 14:48:40', 'fully-funded', 'Switzerland', 'VonRueden PLC', 'Non ut eaque voluptas ut explicabo. Totam dolor ut veniam velit fugit qui dolorum. Atque enim omnis est. Laboriosam aspernatur excepturi dicta omnis quod accusamus.', 'http://www.schuster.com/repudiandae-et-voluptas-qui-reiciendis-aut-consequuntur-asperiores', 'http://swift.com/repudiandae-quos-officiis-voluptatem-vel-natus-in', 'Ipsum est voluptatem facilis officia et voluptatibus omnis. Repudiandae ad rerum odit. Nemo dolorum non ea aperiam omnis. Ducimus commodi eum voluptate quibusdam maiores repellendus.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, 4, 'music-composer', 'Fellowship', 'Wellhead Pumper', 'https://via.placeholder.com/640x480.png/009900?text=quia', '1997-08-22 08:12:56', '2008-10-03 09:36:09', 'self-funded', 'Suriname', 'Anderson-Sauer', 'Nisi enim et excepturi deleniti dolorem maxime. Quibusdam placeat doloribus ea. Labore tempora omnis placeat veritatis dolores voluptates. Hic sit iusto dolor aspernatur nihil et qui dolores.', 'http://fahey.com/voluptates-maiores-deserunt-sint-laudantium-rerum-et', 'https://www.fahey.com/voluptate-velit-molestias-officia', 'Error sit earum animi eaque. Ducimus sint dolores consequatur qui dicta. Harum dolore a commodi officiis.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, 12, 'electronic-engineering-technician', 'Fellowship', 'Transportation Inspector', 'https://via.placeholder.com/640x480.png/0033ee?text=amet', '2017-12-02 00:08:41', '2020-01-30 18:51:05', 'fully-funded', 'Latvia', 'Kessler Inc', 'Assumenda vero maiores voluptates qui voluptas. Architecto hic id laboriosam vel. Et dolore eaque ut ipsam provident velit nostrum.', 'https://www.gleason.com/quia-soluta-ipsum-molestiae-quasi-enim-delectus-magnam', 'http://von.com/quidem-voluptas-beatae-et', 'Mollitia natus saepe molestiae saepe doloribus vel. Iste aut et et iusto. Ipsa quisquam magnam magni cumque temporibus autem.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, 13, 'precision-instrument-repairer', 'Fellowship', 'Payroll Clerk', 'https://via.placeholder.com/640x480.png/0033aa?text=earum', '2004-06-20 01:00:33', '1980-08-05 05:07:40', 'partial-funded', 'Cyprus', 'Leuschke Group', 'Perferendis placeat impedit recusandae at vero officia. Magni et reiciendis quod reiciendis minima excepturi. Unde voluptas necessitatibus iure hic. Quaerat voluptatem fuga facilis quam laboriosam provident inventore dicta. Maiores quae pariatur sint atque ducimus laborum.', 'http://www.von.org/provident-laborum-aliquid-non-dolores', 'http://erdman.net/aliquam-qui-facilis-minus', 'Nihil rerum voluptatem qui sit. Magni tempore nihil cupiditate itaque qui aliquid sunt. Saepe vitae temporibus repudiandae maxime placeat.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, 9, 'aircraft-body-repairer', 'Fellowship', 'Religious Worker', 'https://via.placeholder.com/640x480.png/0077ee?text=voluptatibus', '1980-11-24 23:35:55', '2015-09-06 18:57:06', 'self-funded', 'Pitcairn Islands', 'Jones-Yundt', 'Et dolorem numquam ratione quisquam voluptas recusandae et voluptates. Similique non enim et ea et nulla est.', 'http://kassulke.com/nam-quod-sit-ea-officia', 'http://www.oberbrunner.com/incidunt-esse-dolore-cum-aut', 'Corrupti consectetur perferendis aliquam excepturi laborum amet molestiae. Magnam quasi at ut magni eveniet voluptatem dolores. Sed necessitatibus commodi odit culpa at voluptas.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, 13, 'shampooer', 'Fellowship', 'Engraver', 'https://via.placeholder.com/640x480.png/006688?text=in', '1999-08-09 19:34:09', '2007-10-09 14:31:12', 'partial-funded', 'Nicaragua', 'Klocko and Sons', 'Assumenda libero nam officiis voluptatibus quia repudiandae iusto. Ut quia quae aliquid sed. Non occaecati voluptatibus voluptas sit et. Porro fugit sed qui est.', 'http://kris.info/saepe-dolorum-autem-assumenda', 'http://reinger.info/sint-laborum-saepe-beatae-voluptatem-sint-beatae-rerum', 'Accusamus laboriosam eius inventore mollitia omnis sit. Quia soluta est iusto non aliquid culpa deserunt. Adipisci explicabo ut voluptas cupiditate sit aut.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, 10, 'geological-data-technician', 'Fellowship', 'Psychiatric Aide', 'https://via.placeholder.com/640x480.png/00ffdd?text=commodi', '1993-01-15 14:00:45', '1977-11-20 00:59:39', 'fully-funded', 'Serbia', 'Gutmann-Torp', 'Aut eum eos voluptatibus. Quidem voluptas dolores ut omnis aperiam doloremque voluptatum. Ea quos veritatis molestiae. Ut dignissimos et soluta facilis placeat dolorum et.', 'https://www.shanahan.net/ea-est-veritatis-nobis-sed-minima-incidunt', 'http://reichert.com/', 'Tempora est voluptatem neque dolorem commodi voluptates optio. Similique officiis architecto qui impedit. Quod perspiciatis dolores ut.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(15, 6, 'coil-winders', 'Fellowship', 'Hazardous Materials Removal Worker', 'https://via.placeholder.com/640x480.png/006666?text=eum', '1997-08-04 00:10:44', '2016-06-07 23:48:02', 'self-funded', 'Norway', 'Mueller-King', 'Aut rerum amet ipsam ut nihil. Iusto porro consequatur molestiae et eius. Provident ab saepe modi officiis voluptas natus.', 'http://www.blick.org/hic-beatae-vel-et-sunt-occaecati-a-odit', 'http://www.champlin.info/dicta-consequuntur-quod-consequatur-aut-voluptas', 'Qui totam corrupti voluptas repudiandae impedit. Animi quas tempora corporis magni sed et. Non enim officia ducimus est.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(17, 22, 'yangon-university-of-business', 'Fellowship', 'Yangon University of Business', '611e7ec009e3bBasic Frontend Web Development (1).png', '2021-11-17 00:00:00', '2022-02-05 00:00:00', 'Partial-Funded', 'Singapore', 'Yangon University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 07:21:11', '2021-08-19 09:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `grants`
--

CREATE TABLE `grants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_application_date` datetime DEFAULT NULL,
  `deadline` datetime NOT NULL,
  `funding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `given_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` text COLLATE utf8mb4_unicode_ci,
  `official_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grants`
--

INSERT INTO `grants` (`id`, `slug`, `level`, `title`, `image`, `start_application_date`, `deadline`, `funding`, `country`, `given_by`, `details`, `other_information`, `official_website`, `apply_form_link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'undergraduate', 'Cutting Machine Operator', 'https://via.placeholder.com/640x480.png/00aa88?text=consequatur', '2021-08-20 22:15:04', '2010-11-20 14:39:13', 'self-funded', 'Poland', 'Wolf, Fahey and Medhurst', 'Nobis quasi et molestiae ut impedit voluptate. Ex molestiae dolores dolore sed. Nisi deleniti quo officia molestias repellat. Nostrum quia eveniet voluptatem a. Repellat autem accusantium hic et nihil asperiores.', NULL, 'http://www.hayes.com/earum-distinctio-facilis-cupiditate-commodi', 'http://powlowski.com/illo-ducimus-sint-qui-qui-nam-voluptatem-sit-eum', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, NULL, 'fellowship', 'Industrial Machinery Mechanic', 'https://via.placeholder.com/640x480.png/009988?text=non', '2021-08-20 22:15:09', '1981-04-01 18:33:01', 'partial-funded', 'Turkey', 'Gleichner Group', 'Officiis aut dignissimos esse error facilis in deleniti. Tenetur eos earum tempore possimus accusamus in sint. Cupiditate ut occaecati maxime consequatur natus laboriosam voluptas.', NULL, 'https://streich.com/dolor-nemo-placeat-suscipit-consequatur-architecto-sunt-consequatur-pariatur.html', 'http://www.cummerata.com/et-totam-consequuntur-ducimus-odio-consectetur-nihil-nobis.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, NULL, 'fellowship', 'Mold Maker', 'https://via.placeholder.com/640x480.png/0000ee?text=reprehenderit', '2021-08-20 22:15:12', '2003-08-12 07:40:37', 'partial-funded', 'Madagascar', 'Smith-Dickens', 'Velit explicabo aspernatur nam optio libero rerum. Nostrum molestiae velit consequatur dolor iusto ullam.', NULL, 'http://west.com/aut-eum-enim-deleniti-aliquid-quia-velit-odio', 'http://www.witting.com/saepe-tempore-minima-deserunt-sit-qui-incidunt-a.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, NULL, 'master', 'Marking Clerk', 'https://via.placeholder.com/640x480.png/0000ff?text=numquam', '2021-08-20 22:15:14', '1993-03-31 01:54:29', 'partial-funded', 'Mozambique', 'Weber-Gaylord', 'Aut laudantium nihil velit molestiae quia numquam ipsum. Labore vel facilis praesentium quae quia fugit. Ut molestiae non saepe aut. Molestiae sed quo non qui.', NULL, 'https://botsford.com/suscipit-nihil-repudiandae-molestiae.html', 'http://www.mclaughlin.org/quos-autem-nobis-dolorum-et-repellendus-facilis', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, NULL, 'fellowship', 'Material Movers', 'https://via.placeholder.com/640x480.png/009944?text=beatae', '2021-08-20 22:15:17', '2017-01-23 09:26:36', 'partial-funded', 'Saint Helena', 'Renner, Beier and Funk', 'Quas sunt voluptatem animi quo quod. Aut distinctio delectus quibusdam sequi voluptatum in reprehenderit. Dolores harum optio voluptas id.', NULL, 'https://www.lynch.com/consequatur-reiciendis-qui-quia-sunt-est-fugiat-enim', 'http://www.borer.info/totam-facilis-harum-aliquid.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, NULL, 'master', 'Marketing Manager', 'https://via.placeholder.com/640x480.png/00aa88?text=voluptas', '2021-08-20 22:15:21', '2016-02-18 00:02:28', 'partial-funded', 'Portugal', 'Boyer Ltd', 'Ipsam a soluta voluptates aut. At assumenda illo dolores ipsam perspiciatis. Corporis quis reprehenderit aut accusantium dolor quos voluptatem. Excepturi consequatur iusto unde nemo rerum ipsa ullam.', NULL, 'http://www.hermiston.com/consectetur-repellat-dolorem-et-rem-quisquam-distinctio', 'https://mayert.com/est-vitae-nisi-iusto-nihil-provident.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, NULL, 'master', 'Broadcast News Analyst', 'https://via.placeholder.com/640x480.png/0055cc?text=nam', '2021-08-20 22:15:35', '2000-10-21 12:06:01', 'partial-funded', 'Palau', 'Kulas Group', 'Eaque eum quasi tempore iusto optio distinctio a facere. Adipisci ipsa et neque maxime sapiente eum ut. Non quia debitis vitae eum neque. Nihil est sapiente non distinctio provident quidem officiis.', NULL, 'http://koepp.com/illo-saepe-atque-deserunt-saepe-eum', 'http://www.jakubowski.biz/nesciunt-sunt-est-dignissimos-doloremque-temporibus-consequatur', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, NULL, 'fellowship', 'Immigration Inspector OR Customs Inspector', 'https://via.placeholder.com/640x480.png/008899?text=autem', '2021-08-03 22:15:37', '1999-01-09 12:08:17', 'fully-funded', 'Liberia', 'Rohan, Rowe and Kozey', 'Nam nisi laborum et magni. Excepturi exercitationem aliquam rerum voluptatem recusandae perferendis a. Et mollitia quia inventore ut et. Aut qui laboriosam dolores non.', NULL, 'http://www.green.net/laboriosam-inventore-ducimus-qui-quia', 'http://keebler.org/quia-deserunt-sed-et-consectetur-quis-itaque', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, NULL, 'master', 'Order Filler OR Stock Clerk', 'https://via.placeholder.com/640x480.png/003300?text=quia', '2021-08-18 22:15:39', '1970-08-05 19:54:37', 'fully-funded', 'Saint Kitts and Nevis', 'Osinski, O\'Hara and Carter', 'Voluptas laudantium quis sed est. Dignissimos quidem sed eum aut ut rerum. Eius tenetur sint et eveniet ut ipsa. Totam et perspiciatis sed qui soluta non.', NULL, 'http://hagenes.com/tenetur-modi-ut-aut-dolor-perspiciatis-laboriosam', 'https://boyle.com/et-voluptates-ut-consequatur-provident.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, NULL, 'fellowship', 'Punching Machine Setters', 'https://via.placeholder.com/640x480.png/005566?text=est', '2021-08-11 22:15:41', '1980-12-19 10:30:37', 'partial-funded', 'Guadeloupe', 'Quigley-D\'Amore', 'Ad omnis id rerum nostrum. Et non nam officia et pariatur.', NULL, 'http://ondricka.com/', 'https://fritsch.net/rerum-harum-maiores-deleniti.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, NULL, 'master', 'Taxi Drivers and Chauffeur', 'https://via.placeholder.com/640x480.png/005511?text=voluptatem', '2021-08-03 22:15:42', '2018-01-10 12:02:43', 'self-funded', 'Saint Lucia', 'Donnelly, Sanford and Green', 'In quas labore et quisquam excepturi accusamus ea. Est voluptatem officiis sint voluptas. Eum maiores et placeat voluptas qui consequuntur consequatur. Exercitationem numquam aperiam asperiores est error reprehenderit sequi.', NULL, 'http://romaguera.com/amet-eligendi-sapiente-aut-dolores-magnam', 'https://www.altenwerth.net/eum-officiis-sed-voluptate', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, NULL, 'undergraduate', 'Occupational Therapist Aide', 'https://via.placeholder.com/640x480.png/00bbff?text=voluptas', '2021-08-31 22:15:46', '1978-03-02 21:34:43', 'fully-funded', 'Rwanda', 'Grant-Paucek', 'Omnis id similique corrupti iste nostrum esse deleniti. Iusto inventore ut voluptatem quaerat inventore. Eveniet dolorem facilis aut eos ratione omnis cupiditate. Non delectus voluptatibus iure.', NULL, 'https://bogisich.com/dolor-et-autem-veritatis-fugiat.html', 'http://www.pfannerstill.com/eum-reiciendis-consequatur-ut-tempore-expedita.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, NULL, 'undergraduate', 'Log Grader and Scaler', 'https://via.placeholder.com/640x480.png/00dd55?text=blanditiis', '2021-08-03 22:15:48', '2012-12-24 06:55:12', 'partial-funded', 'Djibouti', 'Nitzsche Group', 'Quaerat assumenda error id. Repellat maiores veritatis harum rem vitae quo. Quis est vel excepturi. Est esse impedit hic ea.', NULL, 'http://hoeger.net/ea-fugit-dolorem-aspernatur-et-aliquid-ut', 'http://www.lynch.com/culpa-minus-omnis-suscipit-velit-repudiandae-magnam-nobis.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, NULL, 'master', 'Power Distributors OR Dispatcher', 'https://via.placeholder.com/640x480.png/0066dd?text=reiciendis', '1900-01-10 22:15:52', '1995-06-13 09:51:54', 'fully-funded', 'Paraguay', 'Nolan, Rutherford and Bashirian', 'Dolores blanditiis nam voluptatem rem quidem consequatur ullam quo. Sint vero reprehenderit adipisci sed nobis.', NULL, 'http://www.tromp.com/', 'http://www.purdy.com/non-ea-nemo-aut-in-enim-cumque-quos.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(15, NULL, 'undergraduate', 'Buyer', 'https://via.placeholder.com/640x480.png/00aa11?text=blanditiis', '2021-08-04 22:15:51', '2004-08-14 21:28:01', 'partial-funded', 'Taiwan', 'Abernathy, Swaniawski and Shanahan', 'Iure debitis et architecto atque est autem. Fugit quasi suscipit sint et porro atque ullam id. Sequi ea exercitationem quaerat ut. Perspiciatis fugit fugit assumenda occaecati numquam doloribus quia.', NULL, 'http://cummings.com/recusandae-possimus-ipsum-incidunt', 'http://www.parisian.biz/quia-quos-sit-sequi-ipsum-delectus', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(16, 'grant-for-myanmar-fellow', 'Undergraduate', 'Grant For Myanmar Fellow', '611fd3689b602Basic Frontend Web Development (1).png', '2021-08-21 00:00:00', '2021-08-28 00:00:00', 'Partial-Funded', 'Indoneshia', 'Yangon University', 'Japan🇯🇵က Future Global Leadership Program မှာ Japanese Language မလိုဘဲ ပါဝင်လို့ ရနေပါပြီ…🤩\r\nMina-san, konnichiwa!🎌 Take Your Time မှပြန်လည်ကြိုဆိုလိုက်ပါတယ် ခင်ဗျာ…🙆\r\nဒီတခေါက် TYTimers တို့အတွက် Japan စာမလိုဘဲ တက်ရောက်လို့ရမယ့် Japan Universities’ programs တွေကို မိတ်ဆက်ပေးနေတဲ့ ဒီ series ရဲ့ တတိယမြောက် content လေးမှာတော့ Tohoku University က Future Global Leadership (FGL) Program (English-Taught) အကြောင်းကိုပြောပြပေးသွားမှာဖြစ်ပါတယ်…🎉🎉\r\nလူဦးရေ 1 million နဲ့ Sendai မြို့လေးမှာ ရှိတဲ့ 🏫Tohoku University🏫ကိုတော့ 1907 ခုနစ်လောက်တုန်းက Japan 🇯🇵 နိုင်ငံ ရဲ့ 🚩Third National University🚩 အဖြစ် တည်ထောင်ခဲ့ပြီး ယခု လက်ရှိမှာလည်း Japan နိုင်ငံရဲ့ တခြားသော Leading Universities တွေကြား Ranked Number One🚩 အပြင် Global Universities Ranking - 269 အနေနဲ့ ဆက်လက်ရပ်တည်နေတာပါ။ ခေတ်အဆက်ဆက် ကြီးမားတဲ့ Achievements တွေနဲ့ အတူ Research အသားပေးတဲ့ ပညာရေးကို ထိန်းသိမ်းထားနိုင်လို့လည်း လူသိများလာရတဲ့ Uni တခု ဖြစ်ပါတယ်…🧑‍🎓\r\n🏫Tohoku ကနေ ပြင်ဆင်ပေးနေတဲ့ ဒီ program မှာတော့ Undergraduate Degree Courses (3) ခုပါဝင်ပြီး English Language နဲ့ သင်ကြားပေးသွားဖို့ရှိပါတယ်…🧑‍🏫\r\n👉Advanced Molecular Chemistry (AMC)\r\nhttp://web.tohoku.ac.jp/amc/ \r\n👉International Mechanical and Aerospace Engineering (IMAC-U) နဲ့\r\nhttp://www.imac.mech.tohoku.ac.jp/ \r\n👉Applied Marine Biology (AMB)\r\nhttps://www.agri.tohoku.ac.jp/amb/ \r\nစတဲ့ Courses (3) ခုကို Foundation ခိုင်ခိုင်၊ အခြေခံကျကျ ပို့ချပေးသွားမှာဖြစ်တဲ့အပြင် နောက်ဆုံးပေါ် Research တွေကိုလည်း လက်တွေ့လုပ်ဆောင်ရမယ့် အခွင့်ရေးတွေပါဝင်တာကြောင့် စိတ်ဝင်စားတဲ့ TYTimers တို့အနေနဲ့ ကြိုက်နှစ်သက်တဲ့ Field တခုချင်းစီရဲ့ Website ကို အပေါ်ကပေးထားတဲ့ Links တွေထဲဝင်ရောက် လေ့လာနိုင်ပါတယ်…✌️✌️\r\nFGL Program Pamphlet: \r\nhttps://www.insc.tohoku.ac.jp/.../FGL_pamphlet... \r\n☑️ Syllabus Directory နဲ့ပက်သတ်ပြီး သိရှိချင်တယ်ဆိုရင် ပေးထားတဲ့ Links တွေထဲ မှာဝင်ရောက် ပေးဖို့တိုက်တွန်းပါရစေ…\r\n1) Advanced Molecular Chemistry (AMC)\r\nhttps://qsl.cds.tohoku.ac.jp/qsl/syllabus/find?type=rigaku \r\n2) International Mechanical and Aerospace Engineering (IMAC-U)\r\nhttps://qsl.cds.tohoku.ac.jp/qsl/syllabus/find?type=kougaku \r\n3) Applied Marine Biology (AMB) \r\nhttps://qsl.cds.tohoku.ac.jp/qsl/syllabus/find?type=nougaku \r\nကိုယ်တက်ရောက်ချင်တဲ့ Class ရဲ့ Syllabus ကို ရှာတွေ့ဖို့ အတွက် အသုံးပြုပုံ အနေနဲ့က Search Box မှာ *AMC*/*IMAC* နဲ့ *Applied Marine Biology* (ဒီတခုကတော့ *AMB*လို့ ရိုက်နှိပ်ပြီးရှာရင်မပေါ်တဲ့အတွက်) ဆိုတဲ့ Keywords တွေကို ရိုက်ထည့်လိုက်ရုံပါဘဲ ခင်ဗျ…💁', 'Application Guideline PDF: \r\nhttps://www.insc.tohoku.ac.jp/.../FGL-Application-Guide... \r\nApplication Process မှာ လိုအပ်မယ့် Documents 🗂️တွေရဲ့ Sample လေးတွေ အတွက် Links:\r\n📌 Download: Statement of Reasons for Applying Form\r\nhttps://www.insc.tohoku.ac.jp/.../Statement_of_reasons... \r\n📌 Download: Graduate Certificate Sample (ကိုယ့်ရဲ့ ကိုယ်ပိုင် School Format လည်းအသုံးပြုလို့ရပါတယ်)\r\nhttps://www.insc.tohoku.ac.jp/.../SAMPLE_Graduate... \r\n📌 Download: Letter on English Proficiency Sample\r\nhttps://www.insc.tohoku.ac.jp/.../FGL_Sample-format... \r\n📌 Examination Fee Instruction \r\nhttps://www.insc.tohoku.ac.jp/.../FGL_application-fee... \r\n💵 Fees ကိုတော့ Application၊ Entrance (Admission Fee) နဲ့ Tuition ဆိုပြီးတော့ ဖော်ပြပေးထားပါတယ်…💁\r\n✔️ Application Fee: JPY 5,000 (Application/Exam အတွက် တစ်ကြိမ်ဘဲပေးသွင်းရမှာပါ)\r\n✔️ Entrance (Admission Fee): JPY 282,000 (Paid once)\r\n✔️ Tuition Fee: JPY 267,900 (Every semester တိုင်းမှာပေးသွင်းဖို့နဲ့ Payment deadline ကိုလည်း after acceptance မှာကြေညာပေးသွားဖို့ရှိပါတယ်)\r\nအကယ်လို့ Admissions Process (Or) Program အတွင်း Revised Fees ရတဲ့အခါ မှာလည်း New Fees ကို revision ရတဲ့အချိန်မှာ ဘဲ Apply လုပ်ပေးရပါမယ်…💁\r\nဒီအပိုင်းနဲ့ဆက်စပ်ပြီးတော့ထပ်မံသိချင်တယ်ဆိုရင်http://www.tohoku.ac.jp/en/admissions/tutition_fees.htmlထဲကို ဝင်ရောက် ကြည့်ရှုပေးပါ ခင်ဗျာ…✌️\r\n💰Financial Support💰အနေနဲ့ Tohoku University ကနေပြီးတော့ International Students တွေအတွက် Japanese Government (MEXT) Scholarship၊ President Fellowship အပြင် Privately Financed International Students တွေအတွက် MEXT Honors Scholarship တို့ကိုလည်း Academic Ability အရ ပြင်ဆင်ပေးထားပါသေးတယ်…👍', 'https://admissions.g30.nagoya-u.ac.jp', 'http://127.0.0.1:8000/admin/scholarship/create', '2021-08-20 09:38:08', '2021-08-20 11:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('part_time_job','full_time_job','internship') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` datetime NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `organization_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` text COLLATE utf8mb4_unicode_ci,
  `job_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `slug`, `type`, `title`, `image`, `deadline`, `place`, `salary`, `start_date`, `organization_name`, `details`, `other_information`, `job_duration`, `apply_form_link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'internship', 'Lodging Manager', 'https://via.placeholder.com/640x480.png/00ff55?text=quia', '1990-12-16 03:48:06', 'online', NULL, '1982-09-07 08:07:56', 'Wendy Reilly', 'Soluta illo nulla ipsam provident recusandae. Ut nisi esse voluptatibus natus. Quos itaque et aut. Voluptatem blanditiis quisquam est fugit.', NULL, '1998-10-11 - 1979-02-23', 'http://www.weber.com/non-sit-inventore-neque-tempore', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, NULL, 'full_time_job', 'Photographic Processing Machine Operator', 'https://via.placeholder.com/640x480.png/00bb88?text=nobis', '1982-12-28 21:51:49', 'online', NULL, '1979-10-22 07:37:56', 'Laura Tillman II', 'Rerum dolores rerum tenetur dolorem esse eos. Ea inventore explicabo error veniam nam. Minus sunt voluptatem eius aliquam quia.', NULL, '2003-08-01 - 1993-03-17', 'https://www.damore.net/perspiciatis-et-aspernatur-quam-veniam', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, NULL, 'part_time_job', 'Council', 'https://via.placeholder.com/640x480.png/003399?text=nihil', '2012-12-06 16:58:47', 'online', NULL, '2002-06-11 08:53:34', 'Stephania Crona', 'Dolorum sit voluptatem cupiditate sint voluptas ut. Aut provident quo exercitationem similique voluptatibus. Id et incidunt voluptatibus autem illum accusamus. Sit architecto natus reprehenderit odio aliquam labore. Asperiores nam perferendis sit excepturi error unde a reprehenderit.', NULL, '2004-07-27 - 1982-04-13', 'http://www.morar.info/dolor-facere-sit-sed.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, NULL, 'part_time_job', 'Molder', 'https://via.placeholder.com/640x480.png/00dd00?text=doloremque', '1984-06-07 07:31:40', 'online', NULL, '1995-07-22 02:52:10', 'Orland Block', 'Id rem sequi cupiditate eos. Iusto nesciunt voluptatem cupiditate omnis. At veritatis rerum saepe cumque voluptas at. Saepe dolores dicta placeat et illo cupiditate incidunt.', NULL, '1994-07-04 - 1999-08-17', 'http://www.schneider.com/vel-delectus-enim-eum-adipisci-quia', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, NULL, 'internship', 'Welder', 'https://via.placeholder.com/640x480.png/00dd33?text=dolorum', '1974-08-28 01:54:26', 'online', NULL, '1997-10-19 05:38:29', 'Arden Jerde', 'Iure dolor quas veniam qui enim quibusdam perspiciatis. Quos voluptatibus ipsam laborum quae aspernatur. Sint assumenda repellat saepe inventore quam sunt ut animi. Deleniti officia aspernatur dolorem eum dolorem deserunt eius ad.', NULL, '2000-01-14 - 2011-11-11', 'https://www.brekke.com/possimus-numquam-impedit-praesentium-ut-rem', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, NULL, 'internship', 'Wind Instrument Repairer', 'https://via.placeholder.com/640x480.png/000044?text=qui', '2012-05-24 07:48:37', 'online', NULL, '1990-04-01 11:31:08', 'Freida Hudson', 'Magnam repellat molestiae assumenda quia voluptatem est. Dolorum sint enim officiis fugiat quos eum harum labore. Consectetur ipsam repudiandae officiis aut.', NULL, '1992-10-07 - 2006-02-26', 'http://www.fisher.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, NULL, 'internship', 'Coroner', 'https://via.placeholder.com/640x480.png/00dd55?text=quia', '2011-04-16 10:15:34', 'online', NULL, '1984-07-12 07:58:48', 'Corine Quitzon', 'Ratione voluptas voluptatum nisi aspernatur quidem labore voluptatibus. Ut repellendus dolores modi autem. Cumque veritatis et non blanditiis officiis corrupti. Fugiat enim similique saepe aut quidem vitae voluptas.', NULL, '1980-05-24 - 1987-11-16', 'https://moen.com/ut-aperiam-harum-facilis-est-quisquam-qui-rem.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, NULL, 'internship', 'Detective', 'https://via.placeholder.com/640x480.png/0011ee?text=dolore', '2011-10-31 06:08:03', 'Svalbard & Jan Mayen Islands', NULL, '2021-06-10 14:32:02', 'Jacklyn Bruen', 'Quasi soluta voluptas illum iure nihil. Eos quam est fuga velit voluptas error. Quis quia debitis et. Saepe enim consequatur quos impedit inventore eveniet.', NULL, '2008-04-23 - 2007-01-12', 'http://turner.org/sit-aut-ab-repellat-voluptatem-et-omnis-est', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, NULL, 'full_time_job', 'Railroad Switch Operator', 'https://via.placeholder.com/640x480.png/0066cc?text=quaerat', '1990-04-21 02:40:15', 'online', NULL, '2018-05-12 04:00:48', 'Emely Dickinson II', 'Dolore rerum fuga amet ratione velit consequatur corporis dolorum. Deleniti sit repudiandae culpa ratione id tempore. Rerum nostrum ratione exercitationem iste.', NULL, '1976-03-23 - 1989-01-08', 'http://www.hauck.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, NULL, 'full_time_job', 'Biochemist or Biophysicist', 'https://via.placeholder.com/640x480.png/0099ee?text=et', '2002-08-15 06:18:27', 'Saint Kitts and Nevis', NULL, '1976-01-02 06:03:30', 'Mr. Antwan Raynor V', 'Doloribus dignissimos ex necessitatibus sapiente quae aut maxime. Et rerum dicta officia veritatis libero et quas. Necessitatibus ut consequatur asperiores quidem ut.', NULL, '1982-05-17 - 2019-03-31', 'http://cassin.com/voluptates-numquam-temporibus-et-qui-consequatur-quaerat-perspiciatis-distinctio', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, NULL, 'part_time_job', 'Lawyer', 'https://via.placeholder.com/640x480.png/0088ff?text=maiores', '1988-02-20 12:26:51', 'Armenia', NULL, '2019-07-09 09:34:13', 'Mitchell Beier', 'Unde aut possimus magni voluptatem et voluptates voluptatem. Qui et id nihil commodi. Illum debitis soluta qui corporis aut est quasi. Magnam natus dolore hic natus est cumque alias sapiente.', NULL, '1972-09-29 - 2004-05-26', 'http://www.sanford.com/voluptatem-ea-magnam-voluptate', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, NULL, 'full_time_job', 'Cook', 'https://via.placeholder.com/640x480.png/00aa66?text=totam', '1997-11-30 11:54:01', 'Italy', NULL, '1976-11-18 12:49:56', 'Maia Dibbert', 'Id deserunt sit libero dolor fugit qui aperiam. Aperiam est aut culpa qui aut. Tempore veritatis accusantium optio.', NULL, '1993-12-04 - 2001-07-22', 'http://www.fahey.com/qui-autem-deleniti-ad-vitae.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, NULL, 'full_time_job', 'Purchasing Agent', 'https://via.placeholder.com/640x480.png/006644?text=ea', '1977-09-14 01:07:21', 'Chile', NULL, '1997-09-19 19:27:10', 'Dr. Zack Nolan III', 'Minus sed quis quo inventore. Esse repudiandae ea et. Eos quia incidunt possimus hic. Commodi nihil illo deleniti molestias modi molestiae iste. Iure deserunt neque exercitationem et.', NULL, '1994-11-06 - 1971-01-10', 'https://www.reinger.com/commodi-ad-quo-quo-quia-exercitationem-iure', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, NULL, 'full_time_job', 'Trainer', 'https://via.placeholder.com/640x480.png/008800?text=perferendis', '1990-08-31 14:05:35', 'online', NULL, '1982-06-29 23:21:29', 'Mr. Arnaldo Nader Sr.', 'Officiis est labore voluptate. Corrupti eveniet nam nam iure eum. Quia sint vitae necessitatibus reprehenderit at ut unde.', NULL, '2002-06-16 - 2019-08-18', 'http://powlowski.info/est-qui-et-et-libero-et', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(15, NULL, 'full_time_job', 'Shoe and Leather Repairer', 'https://via.placeholder.com/640x480.png/0099dd?text=aut', '1993-01-18 12:38:00', 'Burkina Faso', NULL, '1979-09-15 08:56:47', 'Tianna Dickinson', 'Fuga tempora eius omnis. Explicabo ut consequuntur facere quia hic nam. Aut sint id velit dolorum voluptates odio minima.', NULL, '1997-06-11 - 1979-10-22', 'http://www.jakubowski.com/est-eveniet-iusto-rerum-accusamus.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(17, 'web-developer', 'full_time_job', 'Web Developer', '6122171f0bf24IMG_2171.JPG', '2021-08-06 00:00:00', 'Amarica', '100000', '2021-08-24 00:00:00', 'Apple Organization', 'Grab your chance to study at University of Tokyo ✨ (For Undergraduate Students) Hello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️ ကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။ ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ... University of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩 UTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ... Cultural Facilities တွေအနေနဲ့ဆို 📚 Library System 🏛️ Museum 🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။ Public Research Program တွေအတွက် ITO International Research', 'Japanese Government (MEXT) Scholarship ကိုတော့ Maximum 8 Students ကို recommend ပေးသွားမှာဖြစ်ပြီး Entrance Fee (JPY 282,000) နဲ့ Annual Tuition’s JPY 535,800 (JPY 267,900 x 2) တို့အတွက် စဉ်းစားပေးသွားမယ့်အပြင် Living Stipend ကိုလည်း Economy air ticket to/from Japan အပါအဝင် 4 Years အတွက် JPY 119,000/month စီစဉ်ပေးသွားမှာဘဲဖြစ်ပါတယ် 👉 President Fellowship မှာဆိုရင် Examination Fee နဲ့ Entrance Fee (JPY 282,000) ကို After Enrollment မှာ Refunded လုပ်ပေးသွားဖို့အပြင် Living Stipend အတွက် Maximun 4 Years (JPY 267,900/term) ကိုပြင်ဆင်ပေးဖို့ရှိပြီး Students တွေအနေနဲ့ Tuition Fees ကိုလည်း Fully (or) Partially Funded ရဖို့ Apply လုပ်နိုင်ပါသေးတယ်… 👉 Privately Financed International Students တွေရဲ့ MEXT Honors Scholarship မှာတော့ Living Stipend (JPY 48,000/month) အတွက်ကို First 6 months (Oct. 2022 to Mar. 2023) ထောက်ပံ့ပေးသွားဖို့ ဘဲဖြစ်ပါတယ်…👍', '4 months', 'https://www.facebook.com/takeyourtimemyanmar', '2021-08-21 22:48:13', '2021-08-22 02:51:35'),
(19, 'content-writer', 'internship', 'Content Writer', '612219779af35IMG_1678.jpg', '2021-08-10 00:00:00', 'Online', '20000', '2021-08-18 00:00:00', 'TYT', 'Grab your chance to study at University of Tokyo ✨ (For Undergraduate Students) Hello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️ ကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။ ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ... University of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩 UTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ... Cultural Facilities တွေအနေနဲ့ဆို 📚 Library System 🏛️ Museum 🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။ Public Research Program တွေအတွက် ITO International Research', NULL, '4 months', 'https://www.facebook.com/takeyourtimemyanmar', '2021-08-22 03:01:35', '2021-08-22 03:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scholarship_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_application_date` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `funding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `given_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `official_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `scholarship_id`, `slug`, `type`, `title`, `image`, `start_application_date`, `deadline`, `funding`, `country`, `given_by`, `details`, `official_website`, `apply_form_link`, `other_information`, `created_at`, `updated_at`) VALUES
(1, 2, 'waitress', 'Master', 'Dietetic Technician', 'https://via.placeholder.com/640x480.png/005588?text=explicabo', '1983-10-04 03:30:11', '1998-06-23 16:12:36', 'partial-funded', 'Bulgaria', 'Cronin-Feil', 'Est inventore assumenda doloremque odit. Repudiandae ex voluptatem dolor nostrum repudiandae qui. Maxime magnam deserunt porro sit. Magnam velit et et quisquam qui. Quae quos eligendi molestias rerum qui.', 'http://weber.info/vel-sunt-alias-laboriosam-aut-laboriosam', 'http://www.waters.net/sed-dolorum-accusantium-consectetur-minus-maxime-ut.html', 'Dolorem ea a provident porro qui. Repudiandae exercitationem unde veritatis rerum quasi sapiente quos. Alias numquam ratione facilis et non labore. Doloremque accusamus modi magnam ea. Nisi dolor cumque unde laborum.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, 13, 'electrical-power-line-installer', 'Master', 'Entertainer and Performer', 'https://via.placeholder.com/640x480.png/00aa88?text=qui', '1975-03-27 22:13:48', '1979-07-02 11:29:03', 'fully-funded', 'French Southern Territories', 'Kreiger PLC', 'Deserunt reprehenderit culpa aut velit similique sint facilis ut. Iure soluta id pariatur ipsum et quidem quod. Assumenda dolorum enim nostrum.', 'http://www.feest.com/dolores-odio-debitis-pariatur-culpa-fuga', 'http://www.nienow.com/nobis-ex-consequatur-nihil-itaque-a-illum', 'Officiis expedita nisi at porro. Doloribus quis enim aut optio in eos amet. Laboriosam magnam veniam totam molestias voluptatem ut.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, 14, 'mapping-technician', 'Master', 'Landscaping', 'https://via.placeholder.com/640x480.png/00aa00?text=quas', '1998-07-13 21:58:10', '2001-04-07 11:45:34', 'self-funded', 'Tuvalu', 'Schumm PLC', 'Eaque cupiditate neque suscipit dolor cum iusto. Ipsam magni ipsum deleniti culpa aut. Quo odit aut quis nulla ea atque dolorum expedita. Aliquid odio dicta a illum dolore.', 'http://www.klocko.com/', 'http://www.rau.com/', 'A vel fugit unde maiores enim vel commodi. Modi et reiciendis nihil et. Soluta blanditiis molestiae soluta.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, 6, 'gas-plant-operator', 'Master', 'Insurance Investigator', 'https://via.placeholder.com/640x480.png/009977?text=unde', '2016-10-30 18:48:41', '1998-01-18 21:47:31', 'self-funded', 'Bouvet Island (Bouvetoya)', 'Waelchi LLC', 'Qui cupiditate eum doloribus explicabo ipsa magni hic. Doloribus adipisci cum temporibus aut. In nihil possimus qui ipsa magnam autem molestiae. Ut sed quasi beatae inventore voluptas delectus numquam.', 'http://www.williamson.com/', 'http://feeney.biz/sed-maxime-eveniet-et-et-facere-nisi', 'Dolorem ab molestiae qui vero sed laboriosam. Aut ut nulla maxime saepe quia. Deserunt quis rerum deserunt omnis alias excepturi delectus.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, 2, 'respiratory-therapist', 'Master', 'Composer', 'https://via.placeholder.com/640x480.png/00ddee?text=qui', '2017-05-14 21:07:13', '1984-01-17 23:12:53', 'fully-funded', 'Sri Lanka', 'Gerlach, Pacocha and Kiehn', 'Atque magnam et perspiciatis quidem numquam consequatur. Dolorem eos soluta qui et voluptate. Aut rerum est aut repellendus sit laboriosam. Nihil quos et maxime.', 'http://www.ankunding.com/ipsa-quod-molestiae-voluptas-in.html', 'http://www.runte.com/earum-aut-enim-tempora-odio-et-accusantium-doloremque.html', 'Amet sed non cumque voluptatem doloremque. Fugit illum ex libero fuga.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, 11, 'mining-engineer-or-geological-engineer', 'Master', 'Industrial Equipment Maintenance', 'https://via.placeholder.com/640x480.png/0033bb?text=harum', '1992-09-15 08:01:55', '1972-12-04 09:13:09', 'fully-funded', 'Bulgaria', 'Dicki-Runolfsdottir', 'Et vel eveniet deserunt repellendus sint possimus iste. Quia iusto ipsum voluptatem ullam culpa vel. Ducimus et et dicta et. Blanditiis fugiat quos dolore quia.', 'http://www.yost.com/aspernatur-animi-aperiam-molestias-laborum', 'http://carter.net/sit-et-laudantium-et-amet-excepturi-voluptatem-quasi.html', 'Sint quam aperiam libero natus rerum perferendis saepe. Quis non labore reiciendis sed sapiente. Doloribus omnis commodi consequuntur reprehenderit animi minima aut voluptatem.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, 14, 'pesticide-sprayer', 'Master', 'Health Practitioner', 'https://via.placeholder.com/640x480.png/00aa44?text=illo', '2001-02-14 13:56:24', '1995-11-02 22:10:44', 'fully-funded', 'Mauritania', 'Kshlerin, Howell and Emard', 'Corporis sit voluptatem omnis eaque id. Quo voluptate nam culpa. Aspernatur inventore modi quia eveniet ut libero nemo. Et fugiat officiis eligendi veniam enim maiores hic.', 'http://www.carroll.biz/', 'http://www.bahringer.com/veniam-dignissimos-et-odio-et-nostrum-eos', 'Eligendi cumque temporibus eligendi provident ipsam nobis. Molestiae quis voluptas quo dolores aliquam. Autem qui accusantium sapiente dolorem nihil consequatur est voluptas.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, 8, 'insurance-policy-processing-clerk', 'Master', 'Tour Guide', 'https://via.placeholder.com/640x480.png/0066cc?text=et', '2021-05-17 00:39:02', '1983-07-16 02:49:46', 'self-funded', 'Liechtenstein', 'Doyle-White', 'Est laborum doloremque quia voluptatem porro porro. Nesciunt dolorem nostrum minus dolorum. Explicabo deleniti ea ratione odit in velit enim alias. Omnis esse quos est iusto sed earum aperiam.', 'http://goldner.com/rerum-labore-cum-rerum-quo.html', 'http://www.roob.com/non-voluptate-aut-dolorem-est-sed-dolore-excepturi-debitis.html', 'Hic rem quas esse fugiat. Modi cum aliquam nihil temporibus id adipisci. Excepturi quod quo porro vero. Nemo minima deleniti soluta et.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, 3, 'religious-worker', 'Master', 'Chemical Engineer', 'https://via.placeholder.com/640x480.png/007722?text=quis', '1973-07-05 08:54:33', '2000-10-26 09:50:41', 'fully-funded', 'Haiti', 'Howell, Weber and Kozey', 'Consequatur harum porro mollitia odio perferendis placeat ratione qui. Facere in neque est incidunt minima recusandae nemo.', 'http://www.kihn.com/explicabo-molestiae-occaecati-totam-aut-eos-qui', 'http://huel.com/voluptatibus-repellat-ullam-aspernatur-voluptas-explicabo', 'Quod provident et rerum rerum reprehenderit tenetur aut. Et voluptas eveniet quia voluptatem. Et accusamus consectetur ea quisquam esse. Voluptas culpa illo occaecati sequi eos alias.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, 9, 'letterpress-setters-operator', 'Master', 'Marine Architect', 'https://via.placeholder.com/640x480.png/0000cc?text=consequatur', '2005-01-25 07:38:47', '1975-12-02 02:42:08', 'partial-funded', 'Israel', 'Oberbrunner, Senger and Rippin', 'At repellendus nihil sit eos ratione nostrum dolor iste. Quia consequatur dicta praesentium distinctio ut quo. Nulla voluptatibus quae minima maiores pariatur et id optio.', 'http://rodriguez.com/', 'http://lesch.com/magnam-minima-dolorem-alias-laboriosam-dolorum-aut-qui', 'Amet hic reprehenderit adipisci dolor. Officiis neque nulla expedita rerum temporibus sint. Corrupti unde totam nam officia animi.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, 4, 'ship-engineer', 'Master', 'Dishwasher', 'https://via.placeholder.com/640x480.png/00aa44?text=voluptates', '1995-06-18 21:01:48', '1982-10-23 13:08:04', 'self-funded', 'Singapore', 'Baumbach-Simonis', 'Illo et quia est dolorum eaque. Esse molestiae facilis non quidem aperiam dolore autem. Repudiandae quasi corporis blanditiis quidem ut. Recusandae placeat possimus totam qui laboriosam velit molestiae.', 'https://www.schultz.com/temporibus-rerum-dolor-debitis-aut', 'http://jast.net/officiis-amet-quasi-in-eaque-quas-libero', 'Et reiciendis nesciunt in sit aspernatur. Quia voluptas reiciendis et inventore dolores et ut.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, 9, 'weapons-specialists', 'Master', 'Housekeeper', 'https://via.placeholder.com/640x480.png/00dd88?text=autem', '1984-07-25 11:52:14', '1977-09-07 05:09:41', 'self-funded', 'Tokelau', 'Hartmann, Lueilwitz and Hackett', 'Sed impedit minus vel quibusdam officia sint. Doloribus explicabo earum velit rerum similique eaque omnis. Tempore repellendus libero maiores nam nulla iure nesciunt sed.', 'http://hartmann.com/assumenda-repellat-aut-cumque-quia', 'http://wilkinson.com/', 'Qui est quia in quo vel expedita. Error repellendus et voluptatem dolores. Doloribus odio laborum architecto nulla aperiam unde.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, 5, 'rock-splitter', 'Master', 'Insurance Policy Processing Clerk', 'https://via.placeholder.com/640x480.png/0044cc?text=voluptatem', '1994-01-12 21:30:30', '1971-05-14 07:04:16', 'partial-funded', 'Slovenia', 'VonRueden Inc', 'Minus sint non necessitatibus dolor aut suscipit eos. Doloribus libero ea est molestiae nihil quia. Libero consequatur nulla dolore accusantium.', 'https://paucek.com/neque-et-eos-perferendis-ut-vel-modi-tenetur.html', 'http://www.hills.com/', 'At aut repellat voluptas at nisi. Ab omnis enim ab minima autem eos. Omnis saepe unde debitis mollitia. Tempore voluptatum tempore dolores voluptas et sunt iste.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, 10, 'private-household-cook', 'Master', 'Social Sciences Teacher', 'https://via.placeholder.com/640x480.png/006699?text=aut', '1996-05-05 15:59:11', '1974-11-05 06:59:04', 'self-funded', 'Turks and Caicos Islands', 'Kihn, Schiller and Jaskolski', 'Veritatis harum quisquam vel suscipit nisi. Et at ut qui neque quam sequi et. Quidem deleniti a natus eveniet. Distinctio amet dolores est.', 'http://barton.com/ut-et-dolor-rerum-est-reprehenderit-reiciendis-molestiae', 'http://www.hagenes.com/nulla-qui-nihil-inventore-odit-eos.html', 'Placeat non magnam commodi qui tempore. Voluptatum consequatur iure qui facilis. Dignissimos quis adipisci totam dolor ipsa doloremque. Expedita illo consequuntur nemo qui sunt et autem voluptates.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(15, 3, 'construction-laborer', 'Master', 'Orthotist OR Prosthetist', 'https://via.placeholder.com/640x480.png/00eedd?text=accusantium', '2009-05-20 02:21:40', '1989-01-14 05:26:45', 'self-funded', 'Turkmenistan', 'Bauch-Koss', 'Id ut vel ipsum. Animi doloremque voluptate velit quos. Assumenda et ipsa et perspiciatis. Iure velit unde repellat sint doloribus soluta corporis.', 'http://tremblay.com/temporibus-numquam-fuga-quam-consequatur-officia-doloribus.html', 'http://boyle.com/', 'Qui dolor quis voluptates error error. Adipisci ad provident praesentium enim. Sunt odit similique eum doloribus dolorem. Dolorem eius quia quia commodi. Dolores saepe vel odio.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(16, 16, 'people-university', 'Master', 'People University', '611cbb6605e5ejapan_scholar.jpeg', '2021-11-03 00:00:00', '2021-12-12 00:00:00', 'Fully-Funded', 'Japan', 'People University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(18, 18, 'miba-university', 'Master', 'Miba University', '611cbbae91a5djapan_scholar.jpeg', '2021-11-17 00:00:00', '2021-12-25 00:00:00', 'Fully-Funded', 'Japan', 'Miba University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(19, 19, 'yangon-university', 'Master', 'Yangon University', '611cbbbb83babjapan_scholar.jpeg', '2021-11-17 00:00:00', '2022-01-08 00:00:00', 'Fully-Funded', 'Japan', 'Yangon University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(20, 20, 'yangon-university', 'Master', 'Yangon University', '611ccf40b56f5japan_scholar.jpeg', '2021-11-17 00:00:00', '2022-02-05 00:00:00', 'Fully-Funded', 'Japan', 'Yangon University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 02:43:36', '2021-08-18 02:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kaung', 'userOne@gmail.com', 'Testing Message', '2021-08-23 02:16:27', '2021-08-23 02:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_08_22_100529_create_criteria_others_table', 1),
(2, '2021_08_22_100549_create_benefit_others_table', 2),
(3, '2021_08_22_100604_create_process_others_table', 3),
(4, '2021_08_23_074700_create_messages_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oppotunity_places`
--

CREATE TABLE `oppotunity_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `oppotunity` enum('undergraduate','master','phd','fellowship','grant','conference','free_course','paid_course','internship','part_time_job','full_time_job','seminar','competition') COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oppotunity_places`
--

INSERT INTO `oppotunity_places` (`id`, `post_id`, `oppotunity`, `place`, `created_at`, `updated_at`) VALUES
(2, 11, 'seminar', 'Bahrain', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, 8, 'undergraduate', 'Colombia', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, 2, 'seminar', 'Austria', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, 8, 'grant', 'Mayotte', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, 8, 'part_time_job', 'Sri Lanka', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, 2, 'grant', 'Uzbekistan', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, 2, 'undergraduate', 'Saudi Arabia', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(16, 6, 'undergraduate', 'Bolivia', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(17, 4, 'part_time_job', 'Macao', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(18, 5, 'undergraduate', 'El Salvador', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(21, 5, 'conference', 'Austria', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(23, 4, 'grant', 'Slovenia', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(24, 7, 'conference', 'Anguilla', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(25, 12, 'seminar', 'Latvia', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(34, 20, 'undergraduate', 'Japan', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(40, 31, 'undergraduate', 'Korea', '2021-08-19 01:02:48', '2021-08-19 01:02:48'),
(41, 32, 'undergraduate', 'Korea', '2021-08-19 01:06:06', '2021-08-19 01:06:06'),
(56, 17, 'grant', 'UK - United Kingdom', '2021-08-20 11:10:09', '2021-08-20 11:10:09'),
(59, 18, 'grant', 'Amarica', '2021-08-20 11:33:05', '2021-08-20 11:33:05'),
(77, 17, 'conference', 'Africa', '2021-08-21 09:02:01', '2021-08-21 09:02:01'),
(91, 21, 'paid_course', 'Africa', '2021-08-21 09:25:33', '2021-08-21 09:25:33'),
(101, 19, 'internship', 'Online', '2021-08-22 03:01:35', '2021-08-22 03:01:35'),
(107, 18, 'seminar', 'South Myanmar', '2021-08-22 06:24:50', '2021-08-22 06:24:50'),
(109, 17, 'competition', 'Ngiria', '2021-08-22 06:26:18', '2021-08-22 06:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('competition','seminar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` datetime NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `organization_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` text COLLATE utf8mb4_unicode_ci,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `slug`, `type`, `title`, `image`, `deadline`, `place`, `start_date`, `organization_name`, `details`, `other_information`, `apply_form_link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'competition', 'Adjustment Clerk', 'https://via.placeholder.com/640x480.png/004477?text=ut', '2006-10-29 20:33:53', 'online', '1979-12-21 22:37:38', 'Maiya Braun PhD', 'Porro quaerat aliquid vitae neque soluta dicta consequatur. Eos necessitatibus eos commodi et consectetur voluptatem dolor qui. Ex atque laborum laboriosam est. Dolore cum est consequuntur quo.', NULL, 'http://www.stamm.com/at-ad-quis-eos-sint-aliquid-qui-amet-nesciunt', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, NULL, 'competition', 'Milling Machine Operator', 'https://via.placeholder.com/640x480.png/0055ee?text=minus', '2020-07-04 14:12:01', 'online', '2000-03-18 17:13:47', 'Miss Claudia Raynor', 'Vel mollitia omnis optio aliquid et amet. Odit nobis voluptates nam quia quia quos quam. Optio a repudiandae est temporibus occaecati quasi. Sunt quis maxime vitae rerum fugit animi.', NULL, 'http://mraz.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, NULL, 'competition', 'Industrial Safety Engineer', 'https://via.placeholder.com/640x480.png/00bb44?text=voluptas', '2021-01-19 06:26:04', 'online', '1998-06-03 17:59:10', 'Mrs. Muriel Lynch', 'Voluptatem dolores repellendus quod. Unde maxime nisi impedit error quis earum cumque. Similique quo similique voluptas sunt error blanditiis et.', NULL, 'http://braun.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, NULL, 'competition', 'Desktop Publisher', 'https://via.placeholder.com/640x480.png/006677?text=provident', '1985-12-11 07:42:52', 'online', '2007-02-02 06:58:04', 'Prof. Deion McClure Sr.', 'Et est et aut tenetur quisquam qui. Tempore rerum et inventore praesentium aliquam quis aut. Magnam quos quasi iure non dolorem officia.', NULL, 'http://brekke.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, NULL, 'competition', 'Excavating Machine Operator', 'https://via.placeholder.com/640x480.png/0011ee?text=ullam', '1986-08-01 14:34:50', 'Venezuela', '1997-02-10 23:49:13', 'Gloria Auer', 'Rem quidem labore sequi. Eius laborum id molestias illo facilis velit sed. Esse exercitationem beatae molestiae optio illum ex neque et.', NULL, 'http://bauch.com/architecto-error-consequatur-velit-et', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, NULL, 'seminar', 'Engineer', 'https://via.placeholder.com/640x480.png/0044aa?text=ut', '2006-03-08 15:57:08', 'online', '1974-03-28 01:22:31', 'Mr. Jaylin Swift IV', 'Et nobis placeat perferendis id dolores. Deserunt possimus quia et autem. Delectus sed quo repellendus quaerat temporibus unde.', NULL, 'https://www.boyer.com/est-maiores-tenetur-nihil', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, NULL, 'seminar', 'Social Scientists', 'https://via.placeholder.com/640x480.png/007744?text=fugiat', '1979-08-31 05:31:57', 'Wallis and Futuna', '1976-02-25 23:17:11', 'Glen Dibbert', 'Aperiam dolorem maxime est deserunt quos. Veniam consequatur soluta voluptate aliquid et enim dolor. Quis veritatis labore accusantium perferendis iusto et rerum.', NULL, 'http://www.price.org/rem-est-est-consequatur-aut-est-nobis-rerum', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, NULL, 'seminar', 'Screen Printing Machine Operator', 'https://via.placeholder.com/640x480.png/0055ee?text=sint', '2000-03-14 03:15:55', 'online', '1984-08-05 21:27:09', 'Ayla Kemmer', 'Recusandae sed sint est optio nemo. Qui fuga suscipit maxime id cupiditate dolorem.', NULL, 'http://www.hagenes.com/est-officia-impedit-quia-aut-sed', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, NULL, 'competition', 'Supervisor of Customer Service', 'https://via.placeholder.com/640x480.png/009933?text=mollitia', '1982-10-31 20:48:24', 'online', '2017-04-15 13:04:55', 'Irwin Glover', 'Veritatis harum id et nihil. Reiciendis ut et et saepe doloribus culpa quia. Est fugit consequatur assumenda rem. Molestiae assumenda est et ut hic dolor.', NULL, 'http://www.heidenreich.biz/doloribus-accusamus-quidem-dolorum-id-id-veniam.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, NULL, 'seminar', 'Mine Cutting Machine Operator', 'https://via.placeholder.com/640x480.png/00bb99?text=ab', '1994-04-22 09:19:21', 'online', '2014-11-13 08:01:31', 'Bruce Jast', 'Unde omnis cum quia praesentium repellendus eligendi corrupti sint. Libero repudiandae amet commodi quaerat non. Dolores minus qui tenetur minus sed dolore. Dolor ea sunt temporibus qui.', NULL, 'http://adams.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, NULL, 'seminar', 'Online Marketing Analyst', 'https://via.placeholder.com/640x480.png/006633?text=sit', '2016-03-10 10:24:37', 'Mozambique', '2016-06-12 21:03:00', 'Joe Stamm DDS', 'Eligendi velit earum sed. Libero delectus veritatis molestiae debitis totam voluptatem. Aut ipsum commodi non necessitatibus incidunt aut. Corporis velit atque sunt blanditiis a aut.', NULL, 'http://spencer.com/', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, NULL, 'seminar', 'Steel Worker', 'https://via.placeholder.com/640x480.png/00ff99?text=harum', '1985-03-14 03:04:18', 'Seychelles', '2003-08-18 00:41:46', 'Britney Schumm', 'Consequuntur et commodi vel consectetur distinctio. Dicta aut quia consequatur pariatur. Necessitatibus est nihil nihil dolor.', NULL, 'http://fisher.com/aliquid-sit-quia-et-illum-magni-inventore-rerum', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, NULL, 'competition', 'Grounds Maintenance Worker', 'https://via.placeholder.com/640x480.png/008833?text=facilis', '2017-08-25 18:04:49', 'online', '1977-12-31 05:08:07', 'Carson Pouros Jr.', 'Iure voluptas et excepturi exercitationem et ducimus suscipit. Est dolores aut labore qui quas dolorem placeat. Velit quis sed culpa.', NULL, 'http://zulauf.org/harum-et-quas-et-temporibus', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, NULL, 'competition', 'Sawing Machine Setter', 'https://via.placeholder.com/640x480.png/00ccff?text=corrupti', '2010-07-01 02:01:30', 'Yemen', '1983-01-06 07:59:49', 'Arianna Maggio DVM', 'Similique sequi ut eaque rerum aut velit repellendus veniam. Sed facere et nihil quod sed aut repellendus. Ut exercitationem dolor veniam quia doloremque.', NULL, 'https://www.damore.com/sed-nihil-nisi-quo-modi-qui', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(15, NULL, 'competition', 'Home', 'https://via.placeholder.com/640x480.png/006655?text=neque', '2003-07-21 06:36:06', 'Lao People\'s Democratic Republic', '1980-06-29 04:16:34', 'Saul Hahn', 'Aut repellendus nam et maxime dicta officia omnis. Consequuntur asperiores in ad est. Error repudiandae molestiae ipsa ex facere. Eaque ut alias amet quo sunt blanditiis.', NULL, 'http://grimes.com/et-delectus-eos-eius-non-officiis-officiis-explicabo.html', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(17, 'un-seminar-in-uk', 'competition', 'UN Seminar in UK', '61223c9fed997IMG_2171.JPG', '2021-08-20 00:00:00', 'Ngiria', '2021-08-26 00:00:00', 'Nazi', 'rab your chance to study at University of Tokyo ✨ (For Undergraduate Students) Hello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️ ကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။ ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ... University of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩 UTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduat', 'anese Government (MEXT) Scholarship ကိုတော့ Maximum 8 Students ကို recommend ပေးသွားမှာဖြစ်ပြီး Entrance Fee (JPY 282,000) နဲ့ Annual Tuition’s JPY 535,800 (JPY 267,900 x 2) တို့အတွက် စဉ်းစားပေးသွားမယ့်အပြင် Living Stipend ကိုလည်း Economy air ticket to/from Japan အပါအဝင် 4 Years အတွက် JPY 119,000/month စီစဉ်ပေးသွားမှာဘဲဖြစ်ပါတယ် 👉 President Fellowship မှာဆိုရင် Examination Fee နဲ့ Entrance Fee (JPY 282,000) ကို After Enrollment မှာ Refunded လုပ်ပေးသွားဖို့အပြင် Living Stipend အတွက် Maximun 4 Years (JPY 267,900/term) ကိုပြင်ဆင်ပေးဖို့ရှိပြီး Students တွေအနေနဲ့ Tuition Fees ကိုလည်း Fully (or) Partially Funded ရဖို့ Apply လုပ်နိုင်ပါသေးတယ်… 👉', 'https://www.facebook.com/takeyourtimemyanmar', '2021-08-22 05:31:35', '2021-08-22 06:26:18'),
(18, 'myanmar-seminar', 'seminar', 'Myanmar Seminar', '6122491a7086djapan_scholar.jpeg', '2021-08-20 00:00:00', 'South Myanmar', '2021-08-26 00:00:00', 'Cat', 'rab your chance to study at University of Tokyo ✨ (For Undergraduate Students) Hello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️ ကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။ ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ... University of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩 UTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduat', 'anese Government (MEXT) Scholarship ကိုတော့ Maximum 8 Students ကို recommend ပေးသွားမှာဖြစ်ပြီး Entrance Fee (JPY 282,000) နဲ့ Annual Tuition’s JPY 535,800 (JPY 267,900 x 2) တို့အတွက် စဉ်းစားပေးသွားမယ့်အပြင် Living Stipend ကိုလည်း Economy air ticket to/from Japan အပါအဝင် 4 Years အတွက် JPY 119,000/month စီစဉ်ပေးသွားမှာဘဲဖြစ်ပါတယ် 👉 President Fellowship မှာဆိုရင် Examination Fee နဲ့ Entrance Fee (JPY 282,000) ကို After Enrollment မှာ Refunded လုပ်ပေးသွားဖို့အပြင် Living Stipend အတွက် Maximun 4 Years (JPY 267,900/term) ကိုပြင်ဆင်ပေးဖို့ရှိပြီး Students တွေအနေနဲ့ Tuition Fees ကိုလည်း Fully (or) Partially Funded ရဖို့ Apply လုပ်နိုင်ပါသေးတယ်… 👉', 'https://www.facebook.com/takeyourtimemyanmar', '2021-08-22 06:24:50', '2021-08-22 06:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phds`
--

CREATE TABLE `phds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scholarship_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_application_date` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `funding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `given_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `official_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phds`
--

INSERT INTO `phds` (`id`, `scholarship_id`, `slug`, `type`, `title`, `image`, `start_application_date`, `deadline`, `funding`, `country`, `given_by`, `details`, `official_website`, `apply_form_link`, `other_information`, `created_at`, `updated_at`) VALUES
(1, 7, 'clinical-psychologist', 'Phd', 'Audio-Visual Collections Specialist', 'https://via.placeholder.com/640x480.png/009955?text=beatae', '1981-10-08 09:06:31', '2002-12-19 08:40:55', 'partial-funded', 'Bhutan', 'White Inc', 'Harum numquam itaque possimus fuga odio modi molestiae. Fugit nobis voluptatem dolorem hic tempore. Accusamus provident culpa ipsa aut ullam eveniet. Consequatur est at enim nesciunt occaecati mollitia nam sapiente.', 'http://cummerata.info/', 'http://www.murazik.com/qui-dicta-eos-dolor-qui-et-sed', 'Est voluptatem qui dignissimos et qui. Excepturi quis incidunt cumque sapiente ut optio numquam. Perspiciatis molestias itaque alias excepturi qui a repudiandae.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, 11, 'recreational-therapist', 'Phd', 'Home Entertainment Equipment Installer', 'https://via.placeholder.com/640x480.png/0099dd?text=debitis', '1982-12-22 02:35:31', '2008-08-15 14:38:58', 'partial-funded', 'Azerbaijan', 'Okuneva, Raynor and Leuschke', 'Et est id ut adipisci impedit nam. Laborum error quia cumque et nihil iusto. Et maxime minus voluptatem ex aut quibusdam voluptas.', 'http://davis.com/atque-ut-voluptatibus-culpa-libero', 'http://hirthe.com/', 'Iure dolores voluptas fugiat enim velit pariatur. Sit eius quas aliquam dolores est est quod. Alias sunt quis dolor blanditiis eum enim.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, 10, 'paste-up-worker', 'Phd', 'Vice President Of Marketing', 'https://via.placeholder.com/640x480.png/006688?text=minus', '1971-03-26 02:17:48', '1987-07-29 09:19:28', 'partial-funded', 'Guam', 'Effertz-Langworth', 'Tenetur veritatis est vitae incidunt beatae non tempora. Voluptas ea et aliquid omnis sed. Laudantium velit nulla ducimus quia praesentium quam unde. Velit non enim sit dolorem tempora assumenda expedita.', 'http://www.roberts.com/inventore-maxime-rerum-asperiores-pariatur-harum-dolore.html', 'http://breitenberg.com/voluptatem-et-illum-eius-eligendi-consequuntur-deserunt-ea', 'Eos ab laboriosam sequi minus quae dicta non commodi. Quis numquam et labore quae. Non natus perferendis tenetur.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, 9, 'electronics-engineer', 'Phd', 'Precision Devices Inspector', 'https://via.placeholder.com/640x480.png/00ff77?text=ut', '2005-03-07 05:33:55', '1984-02-25 09:08:48', 'fully-funded', 'Chile', 'Koepp, Hoeger and Douglas', 'Quisquam blanditiis sed omnis et optio vel. Tempore dicta est explicabo similique nobis. Vel et id unde quis perspiciatis reprehenderit. Vel sapiente voluptates molestiae quidem laborum debitis.', 'http://daniel.info/incidunt-rerum-eius-libero-quia-quasi', 'https://www.armstrong.org/laborum-voluptatum-tempore-voluptatibus-consectetur-rerum', 'Aut vitae pariatur laudantium doloribus ratione est saepe mollitia. Qui non sit dolores sint dolorum ipsa voluptas a. In rem cumque animi laboriosam.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, 2, 'concierge', 'Phd', 'Embalmer', 'https://via.placeholder.com/640x480.png/00bb00?text=adipisci', '2014-08-10 18:35:41', '1991-07-22 10:33:47', 'partial-funded', 'El Salvador', 'Friesen and Sons', 'Labore occaecati reiciendis et aut ipsam soluta repellendus minus. Est odit omnis porro necessitatibus minima. Et atque eos ut eum.', 'http://www.frami.org/voluptas-dignissimos-beatae-velit-qui-voluptas', 'http://daugherty.com/ut-nobis-temporibus-doloremque', 'Doloremque totam quis laborum perspiciatis quisquam similique officia aut. Molestiae voluptatem iure architecto est ipsum omnis odio. Tempore ut a rerum blanditiis at ducimus. Optio corrupti expedita facere ea enim facilis.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, 8, 'credit-checker', 'Phd', 'Amusement Attendant', 'https://via.placeholder.com/640x480.png/005599?text=et', '1972-01-29 17:00:04', '1991-12-27 02:16:26', 'partial-funded', 'Vanuatu', 'Beahan-Champlin', 'Minima ea sint ut occaecati perspiciatis aspernatur maiores ipsam. Est est quas est voluptatum voluptatibus et. Nisi neque iste dolorum.', 'http://www.hills.com/quia-voluptatibus-vitae-facere-nulla.html', 'http://trantow.com/id-sit-sit-saepe-et-suscipit-facilis', 'Quo minus magnam nulla atque voluptatem. Minima illum quisquam laudantium voluptatem deserunt ut. Autem quos aut ipsam eos ut. Optio ea commodi officiis aut atque quia mollitia.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, 12, 'electrical-drafter', 'Phd', 'Keyboard Instrument Repairer and Tuner', 'https://via.placeholder.com/640x480.png/0077ff?text=nobis', '2021-02-24 04:18:53', '2005-07-17 09:35:59', 'fully-funded', 'Senegal', 'Rowe Ltd', 'Ex ut praesentium animi a impedit itaque ullam. Aut ipsa magni debitis sit. Repudiandae id minus explicabo laboriosam eum voluptatum qui. Veniam totam est aut dicta repellendus itaque.', 'http://batz.com/cumque-repellat-voluptate-nemo-aliquam-eaque-aut.html', 'http://trantow.info/aut-sed-rerum-qui-enim-et.html', 'Quam ullam modi voluptas saepe provident quaerat eos. Assumenda aut voluptas doloribus eos consequatur ipsam voluptatem. Qui impedit quasi exercitationem vel qui est ea.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, 2, 'product-management-leader', 'Phd', 'Fiber Product Cutting Machine Operator', 'https://via.placeholder.com/640x480.png/0011ff?text=et', '2016-02-19 10:42:19', '1986-07-02 01:00:13', 'fully-funded', 'Lesotho', 'Stoltenberg-Ferry', 'Mollitia voluptatum sed beatae sequi aut. Qui sed aliquid ut et. Assumenda adipisci doloremque eum aperiam perspiciatis porro sequi. Ut sequi vero velit harum.', 'http://breitenberg.org/', 'http://www.jakubowski.com/fugiat-eum-dolor-debitis-pariatur-cum-dicta-aperiam-molestias.html', 'Et aspernatur corporis aperiam excepturi error. Sed sapiente porro qui sed. Ex tempora omnis quo vero a quia.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, 8, 'agricultural-sales-representative', 'Phd', 'Construction Manager', 'https://via.placeholder.com/640x480.png/00bbdd?text=laudantium', '1981-11-05 10:58:14', '1976-10-05 05:36:33', 'partial-funded', 'French Polynesia', 'Littel Inc', 'Est quia provident non et a et. Velit in est distinctio. Reiciendis sequi reiciendis quia tempore ipsam omnis laborum. Et qui ut aut voluptas nam hic.', 'http://www.adams.net/', 'https://www.roberts.biz/amet-non-nihil-recusandae-necessitatibus-doloribus', 'Quae assumenda laudantium qui architecto doloremque. Quia eum fugit omnis non quis et. Sed quas ab quia sunt ea reprehenderit inventore. Ex autem et animi sed quisquam culpa.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, 8, 'judge', 'Phd', 'Precision Printing Worker', 'https://via.placeholder.com/640x480.png/008877?text=et', '1981-03-18 21:10:00', '1975-09-29 04:51:53', 'self-funded', 'Czech Republic', 'Weimann-Murray', 'Voluptatem ab odio dignissimos reiciendis. Delectus qui pariatur quae eum delectus. Fugit nihil est quia autem.', 'http://www.feeney.info/', 'http://www.kihn.com/similique-ut-odit-repellendus-iste', 'Adipisci recusandae id corporis saepe tenetur modi omnis. Dolor aut debitis et aut. Quod in quia minus ut. Molestias iure impedit est atque sed.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, 13, 'career-counselor', 'Phd', 'Electrical and Electronics Drafter', 'https://via.placeholder.com/640x480.png/0011aa?text=iste', '2015-10-25 01:09:09', '1996-03-17 14:53:56', 'partial-funded', 'Aruba', 'Cremin-Schmeler', 'Ut aut iusto doloribus nostrum neque cum. Ut qui et suscipit aspernatur minus non id. Porro ea dolor beatae quaerat.', 'https://www.medhurst.com/eos-repudiandae-eum-aut-nihil-voluptatibus', 'http://walter.com/maxime-iure-dolorum-molestiae-nihil-omnis', 'Placeat necessitatibus molestiae incidunt. Quod consequatur facilis iusto ex. Temporibus inventore sint eum optio a quaerat omnis alias.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, 2, 'electrical-and-electronic-inspector-and-tester', 'Phd', 'Weapons Specialists', 'https://via.placeholder.com/640x480.png/003355?text=sit', '1977-01-17 01:17:21', '2019-05-15 14:29:10', 'self-funded', 'Reunion', 'Leuschke LLC', 'Itaque id non recusandae quaerat. Debitis error quibusdam fuga exercitationem rerum. Est minima praesentium aut saepe ad laudantium. Nisi est explicabo et exercitationem blanditiis officia et.', 'https://www.maggio.org/autem-reiciendis-aut-nam-voluptas-qui-exercitationem-facere', 'https://www.bayer.com/molestiae-aut-ut-natus-dolorem-non', 'Sed ullam ipsa placeat occaecati iste similique explicabo. Error qui excepturi consequuntur porro at velit. Ea quaerat facilis illo ut atque ducimus id. Possimus maxime necessitatibus repudiandae voluptas dolores sit et. Sit sit aut eaque sequi vitae sunt sint non.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, 1, 'dancer', 'Phd', 'Soil Scientist', 'https://via.placeholder.com/640x480.png/0088aa?text=qui', '1995-03-05 11:05:08', '1974-09-02 05:12:30', 'fully-funded', 'Armenia', 'Swift-Pagac', 'Totam nesciunt debitis accusantium vel harum. Molestiae consequatur qui dolores laboriosam quo ut.', 'http://www.cruickshank.com/', 'http://wunsch.net/laboriosam-nulla-tempora-nihil-eligendi', 'Dolor eveniet et commodi suscipit dolorum expedita. Minus nobis nulla sint omnis.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(15, 12, 'biological-technician', 'Phd', 'Bailiff', 'https://via.placeholder.com/640x480.png/00ffff?text=vel', '1975-12-24 04:38:35', '1988-09-20 23:00:33', 'self-funded', 'Martinique', 'Harris-Erdman', 'Ipsam cumque qui vel dolores accusantium repudiandae qui. Temporibus velit cupiditate et illo eius.', 'http://www.larkin.com/fugiat-quo-alias-sunt.html', 'http://www.lebsack.com/ratione-non-nihil-eum-enim-qui-fugiat-quis-sunt', 'Et vitae qui et et cupiditate corporis dolorem. Modi rerum exercitationem enim doloribus qui aut. Illum aliquam tempora aliquid qui quisquam quae repellendus consequatur.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(16, 16, 'people-university', 'Phd', 'People University', '611cbb6605e5ejapan_scholar.jpeg', '2021-11-03 00:00:00', '2021-12-12 00:00:00', 'Fully-Funded', 'Japan', 'People University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(18, 18, 'miba-university', 'Phd', 'Miba University', '611cbbae91a5djapan_scholar.jpeg', '2021-11-17 00:00:00', '2021-12-25 00:00:00', 'Fully-Funded', 'Japan', 'Miba University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(19, 19, 'yangon-university', 'Phd', 'Yangon University', '611cbbbb83babjapan_scholar.jpeg', '2021-11-17 00:00:00', '2022-01-08 00:00:00', 'Fully-Funded', 'Japan', 'Yangon University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(20, 20, 'yangon-university', 'Phd', 'Yangon University', '611ccf40b56f5japan_scholar.jpeg', '2021-11-17 00:00:00', '2022-02-05 00:00:00', 'Fully-Funded', 'Japan', 'Yangon University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 02:43:36', '2021-08-18 02:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `process_conferences`
--

CREATE TABLE `process_conferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conference_id` bigint(20) UNSIGNED NOT NULL,
  `process` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_conferences`
--

INSERT INTO `process_conferences` (`id`, `conference_id`, `process`, `created_at`, `updated_at`) VALUES
(10, 17, 'admission.iup.kyoto-u.ac.jp/oct2021/', '2021-08-21 09:02:01', '2021-08-21 09:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `process_grants`
--

CREATE TABLE `process_grants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grant_id` bigint(20) UNSIGNED NOT NULL,
  `process` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_grants`
--

INSERT INTO `process_grants` (`id`, `grant_id`, `process`, `created_at`, `updated_at`) VALUES
(23, 16, 'ဒီအပိုင်းကိုတော့ Online Procedure လုပ်ဆောင်ရမှာ ဖြစ်ပြီး ⛔Submission Period⛔က 5th January, 2022 (Noon by JST, Wednesday) ကနေ 12nd January, 2022 (Noon by JST, Wednesday) အတွင်းသတ်မှတ်ထားပါတယ်… 💁', '2021-08-20 11:23:54', '2021-08-20 11:23:54'),
(24, 16, '☑️ Application Guidelines Download Link https://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-20 11:23:54', '2021-08-20 11:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `process_others`
--

CREATE TABLE `process_others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `other_id` bigint(20) UNSIGNED NOT NULL,
  `process` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_others`
--

INSERT INTO `process_others` (`id`, `other_id`, `process`, `created_at`, `updated_at`) VALUES
(3, 18, 'ဒီအပိုင်းကိုတော့ Online Procedure လုပ်ဆောင်ရမှာ ဖြစ်ပြီး ⛔Submission Period⛔က 5th January, 2022 (Noon by JST, Wednesday) ကနေ 12nd January, 2022 (Noon by JST, Wednesday) အတွင်းသတ်မှတ်ထားပါတယ်… 💁', '2021-08-22 06:24:50', '2021-08-22 06:24:50'),
(5, 17, 'ဒီအပိုင်းကိုတော့ Online Procedure လုပ်ဆောင်ရမှာ ဖြစ်ပြီး ⛔Submission Period⛔က 5th January, 2022 (Noon by JST, Wednesday) ကနေ 12nd January, 2022 (Noon by JST, Wednesday) အတွင်းသတ်မှတ်ထားပါတယ်… 💁', '2021-08-22 06:26:18', '2021-08-22 06:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `process_scholarships`
--

CREATE TABLE `process_scholarships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scholarship_id` bigint(20) UNSIGNED NOT NULL,
  `process` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_scholarships`
--

INSERT INTO `process_scholarships` (`id`, `scholarship_id`, `process`, `created_at`, `updated_at`) VALUES
(1, 16, '☑️ Application Guidelines Download Link https://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(3, 18, '☑️ Application Guidelines Download Link https://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(4, 19, '☑️ Application Guidelines Download Link https://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(5, 20, '☑️ Application Guidelines Download Link https://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(7, 22, '☑️ Application Guidelines Download Link https://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(32, 32, 'ဒီအပိုင်းကိုတော့ Online Procedure လုပ်ဆောင်ရမှာ ဖြစ်ပြီး ⛔Submission Period⛔က 5th January, 2022 (Noon by JST, Wednesday) ကနေ 12nd January, 2022 (Noon by JST, Wednesday) အတွင်းသတ်မှတ်ထားပါတယ်… 💁', '2021-08-19 01:06:06', '2021-08-19 01:06:06'),
(33, 32, '1st Stage Screening Outcome အတွက် Announcement ကိုတော့ 14th February, 2022 (10:00 by JST, Monday) မှာပြုလုပ်ပေးဖို့ ရှိတဲ့ အပြင် Online 2nd Stage Examination ကိုလည်း 7th March, 2022 ကနေ 11st March, 2022 အတွင်း One/Two Days ဖြေဆိုဖို့ ရှိပါသေးတယ်…', '2021-08-19 01:06:06', '2021-08-19 01:06:06'),
(34, 32, '1st April, 2022 (10:00 by JST, Friday) မှာ Successful Applicants ကို ကြေညာပေးဖို့နဲ့အတူ Admission Procedures ကိုပါ 8th April (8:00 by JST, Friday) အထိ ပြုလုပ်သွားဦးမှာပါ…', '2021-08-19 01:06:06', '2021-08-19 01:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_application_date` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `funding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `given_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `official_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `name`, `slug`, `type`, `title`, `image`, `start_application_date`, `deadline`, `funding`, `country`, `given_by`, `details`, `official_website`, `apply_form_link`, `other_information`, `created_at`, `updated_at`) VALUES
(1, 'scholarship', 'hazardous-materials-removal-worker', 'Phd', 'Mining Machine Operator', 'https://via.placeholder.com/640x480.png/0055ff?text=fuga', '1976-03-03 14:30:28', '2018-04-29 18:21:42', 'self-funded', 'Hungary', 'Luettgen-Rippin', 'Esse sapiente sint amet nostrum excepturi delectus. Aut corporis aut delectus debitis sed possimus voluptatem. Dicta aperiam autem quam optio. Nostrum ipsam alias aut qui perspiciatis quaerat.', 'https://www.schoen.com/odit-blanditiis-molestias-harum-iste-libero', 'https://marvin.com/eveniet-omnis-saepe-enim-dolorem-eius-et.html', 'Et autem explicabo itaque qui aliquam odit reiciendis. Non quod ducimus culpa voluptate eos aut deserunt. Aut minus quis minus dolorem et dolor. Animi et blanditiis qui sunt ea.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, 'scholarship', 'anthropology-teacher', 'Fellowship', 'Meter Mechanic', 'https://via.placeholder.com/640x480.png/00bb66?text=at', '1992-08-12 13:58:20', '2006-05-12 12:10:43', 'partial-funded', 'Lithuania', 'Tillman, Runte and Stanton', 'Et minima ut nihil occaecati consequatur sequi. Numquam eos delectus quis deserunt nesciunt. Laborum sed eum rerum accusantium porro voluptate. Ipsum quas corporis esse dolor id pariatur aperiam fugiat. Pariatur maiores illum repellat quis.', 'http://www.damore.com/qui-et-doloribus-deleniti-neque-et.html', 'http://larson.com/vero-placeat-nemo-fugit-corrupti-consequatur.html', 'Quisquam culpa neque minus nemo autem quaerat. Numquam architecto incidunt nemo. Et laborum vitae dolor et.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, 'scholarship', 'paper-goods-machine-operator', 'Undergraduate', 'Mold Maker', 'https://via.placeholder.com/640x480.png/005577?text=accusamus', '1985-04-10 06:07:23', '2016-04-09 13:49:40', 'self-funded', 'Nicaragua', 'Hodkiewicz Group', 'Ut pariatur soluta nihil eligendi qui qui. Deleniti facere rerum incidunt cum ipsa libero qui reiciendis. Consequatur error sit eos expedita explicabo atque. Nam dolore molestiae facere facilis quia excepturi minima. Voluptate magni ad officia sint earum fugiat.', 'http://wolf.com/sed-voluptas-provident-quia-nemo-quia-culpa', 'http://donnelly.com/debitis-et-asperiores-aut-et-aut-ut.html', 'Necessitatibus corporis ab temporibus repellendus a. Doloremque reiciendis sunt et fugiat. Ipsam et animi rerum odio ad consequuntur.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, 'scholarship', 'communications-equipment-operator', 'Master', 'Medical Sales Representative', 'https://via.placeholder.com/640x480.png/00ee33?text=sint', '1998-12-26 04:22:25', '2004-03-01 23:39:45', 'fully-funded', 'French Polynesia', 'Barrows-Ankunding', 'Fuga rerum omnis asperiores architecto voluptatum eos sint. Culpa inventore non similique veniam quas qui. Omnis perferendis sint explicabo quibusdam. Nostrum quisquam sit voluptatem neque eius quisquam.', 'http://sauer.com/commodi-itaque-pariatur-ea-assumenda-aut', 'http://www.schinner.org/expedita-eum-et-eius-odit', 'Minima esse sed delectus mollitia iure odit ut. Voluptate consequatur ipsum nisi quia voluptas. Aperiam neque sunt eaque rem amet voluptatum.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, 'scholarship', 'solderer', 'Fellowship', 'Radio and Television Announcer', 'https://via.placeholder.com/640x480.png/00aa77?text=maiores', '1975-06-01 02:05:25', '2010-02-26 12:07:35', 'self-funded', 'South Africa', 'Purdy, Heidenreich and Gleason', 'Non voluptas laboriosam ut eligendi nam dolores officia. Et distinctio aut sed odio. Ipsam doloribus ut provident nostrum voluptas temporibus. Ea placeat similique impedit rerum voluptatem.', 'http://williamson.com/minus-sit-omnis-enim-et-magni', 'https://wisoky.com/accusamus-quas-quam-eos-magni-est-aut-et-non.html', 'Eum sit qui minus. Qui laborum eos saepe doloribus architecto aperiam. Quis perferendis qui omnis laboriosam nisi ut.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, 'scholarship', 'plumber', 'Phd', 'Postsecondary Teacher', 'https://via.placeholder.com/640x480.png/008800?text=nesciunt', '2003-08-27 02:23:35', '1981-06-09 21:13:03', 'partial-funded', 'Germany', 'Lubowitz, Kassulke and Hartmann', 'Et at fugit molestias id dicta quos et. Ea modi modi quia temporibus qui et. Facere saepe aut illo. Sit eum rerum quia omnis voluptatum vero laboriosam.', 'http://olson.com/', 'https://bosco.net/velit-rerum-non-accusantium-vitae-asperiores-ducimus-necessitatibus.html', 'Nobis hic eius repellendus asperiores et. Fugit magnam rerum provident unde nisi rerum repellat. Voluptas esse voluptatem enim labore aut eligendi sint.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, 'scholarship', 'construction-carpenter', 'Fellowship', 'Electrical and Electronic Inspector and Tester', 'https://via.placeholder.com/640x480.png/004400?text=ullam', '2012-02-23 17:18:26', '2007-01-23 10:45:26', 'partial-funded', 'Tokelau', 'Dibbert PLC', 'Commodi tempora et totam ut. Assumenda odit rerum vel impedit. Quo quia odit enim minima ea quis. Saepe rerum voluptatem similique cumque. Repudiandae vel necessitatibus voluptatem minima molestiae.', 'https://www.damore.com/consequuntur-voluptatem-qui-dolor-quo-ut-et', 'https://www.gerhold.com/deleniti-quae-fuga-esse-adipisci-mollitia', 'Voluptas repellendus et tempora inventore dolor. Aut optio repudiandae non temporibus. Quam praesentium et voluptatem praesentium quia.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, 'scholarship', 'actuary', 'Master', 'Fabric Pressers', 'https://via.placeholder.com/640x480.png/003300?text=exercitationem', '1986-12-21 04:45:57', '1990-03-19 22:04:29', 'fully-funded', 'Saint Kitts and Nevis', 'Spencer-Gusikowski', 'Quia aliquid voluptas ut adipisci praesentium necessitatibus illo aut. Odit labore eum quod. Tenetur sint veritatis voluptatem earum nam atque.', 'http://cassin.com/', 'http://leffler.com/', 'Labore ipsa et totam corrupti consequuntur. Ut debitis incidunt minima est soluta perferendis. Velit consequatur eum quidem sint in. Qui sed accusantium et porro omnis nulla. Sequi et beatae possimus quo id perspiciatis omnis.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, 'scholarship', 'vending-machine-servicer', 'Phd', 'Vending Machine Servicer', 'https://via.placeholder.com/640x480.png/004400?text=provident', '2021-05-04 19:38:10', '2012-11-08 05:32:16', 'partial-funded', 'Maldives', 'Dietrich LLC', 'Doloremque dolor velit quaerat explicabo rerum atque occaecati. Adipisci alias qui animi sunt nemo eos repudiandae. Voluptates similique magnam deserunt voluptatem est sed nobis. Nostrum autem sint sint est tempore nam. Impedit quasi facere ea facilis repudiandae perspiciatis.', 'http://sawayn.com/aut-voluptatibus-qui-ea-quidem-aut-sed', 'https://jacobson.com/iure-deleniti-ipsum-veritatis-architecto-quisquam-qui-esse-ea.html', 'Non dolorem sit sit quia. Hic incidunt aliquid aperiam minus et. Sed officiis tempore pariatur magnam dolorem. Et omnis praesentium molestiae placeat.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, 'scholarship', 'radiologic-technologist', 'Undergraduate', 'Fire Investigator', 'https://via.placeholder.com/640x480.png/00dd00?text=error', '1978-10-31 14:02:50', '2012-12-05 21:54:20', 'partial-funded', 'Azerbaijan', 'Glover, Medhurst and Balistreri', 'Temporibus voluptas doloribus saepe ut ullam accusantium molestiae. Modi qui accusamus possimus accusantium. A aliquam labore odio est voluptatem est id iusto. Perspiciatis ipsum et officiis temporibus incidunt.', 'https://www.anderson.com/laboriosam-quo-quia-totam-omnis', 'http://lueilwitz.com/', 'Architecto sit sint omnis repudiandae omnis. Sunt veritatis ex maxime porro. Et iusto aliquid recusandae ex molestiae.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, 'scholarship', 'structural-iron-and-steel-worker', 'Undergraduate', 'Sketch Artist', 'https://via.placeholder.com/640x480.png/0088ff?text=quo', '2001-05-29 19:00:59', '2003-05-25 03:38:19', 'fully-funded', 'Iceland', 'Sawayn, Hayes and Mosciski', 'Et quaerat voluptatem ut aliquam. Natus consequatur sint molestias qui nulla labore esse. Enim ut vero voluptas facilis et laboriosam vero harum. Ex dicta quis ipsam molestias.', 'http://www.strosin.info/maxime-sed-voluptas-aliquid', 'http://schuster.com/ex-nihil-nisi-rerum-eveniet', 'Adipisci distinctio quia ratione voluptate aperiam sint sed impedit. Odio sunt aliquid saepe quis suscipit veniam qui.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, 'scholarship', 'log-grader-and-scaler', 'Master', 'Naval Architects', 'https://via.placeholder.com/640x480.png/0077ee?text=hic', '1982-06-04 07:19:38', '2004-05-26 00:04:38', 'fully-funded', 'Vietnam', 'Turcotte, Crooks and Barrows', 'Voluptates eos eos excepturi impedit nobis quisquam. Quae enim ducimus repudiandae sunt et nostrum. Beatae veniam ex dolores dolor nesciunt. Reiciendis in et aut eius incidunt ut.', 'http://www.stroman.biz/maxime-praesentium-ut-non-sit.html', 'https://adams.biz/molestiae-sint-cupiditate-aliquam-placeat-quos-in-cupiditate.html', 'Et maxime eaque et minima nemo voluptas id. Quo recusandae ratione inventore illo dolor veniam. Non quo aspernatur aut voluptatem placeat. Earum sunt cumque officia modi consequuntur.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, 'scholarship', 'musical-instrument-tuner', 'Fellowship', 'Board Of Directors', 'https://via.placeholder.com/640x480.png/0044aa?text=id', '1993-12-08 11:20:31', '1990-04-12 19:49:37', 'partial-funded', 'Seychelles', 'Lind LLC', 'Provident non voluptas ducimus vitae aliquid error. Quia et vel est aliquid laboriosam quod deserunt. Quidem maiores rem totam corrupti dignissimos consequatur expedita.', 'http://stehr.com/repudiandae-dolorem-architecto-aut-voluptatibus-id-fuga', 'http://www.powlowski.com/consequatur-asperiores-eos-quam', 'Dolorem officiis velit omnis officia facilis laboriosam inventore. Tempora et dicta temporibus numquam omnis. Quis minus modi blanditiis aspernatur explicabo.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, 'scholarship', 'real-estate-broker', 'Undergraduate', 'Truck Driver', 'https://via.placeholder.com/640x480.png/0000bb?text=ut', '1982-09-14 22:54:58', '1987-11-22 06:57:55', 'partial-funded', 'Finland', 'Howell and Sons', 'Et nemo ipsa qui dolores hic accusamus non fuga. Aut ut ullam culpa consequatur est quo. Fugit est sint culpa reiciendis.', 'http://mante.com/dolores-occaecati-placeat-enim-necessitatibus', 'https://pagac.com/ullam-vel-quis-deleniti-optio-voluptas-id.html', 'Animi totam aliquid facere voluptas. Eos recusandae et reprehenderit. Ipsa quaerat qui possimus illum voluptatem sed qui.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(16, 'Scholarship', 'people-university', 'Master,Phd', 'People University', '611cbb6605e5ejapan_scholar.jpeg', '2021-11-03 00:00:00', '2021-12-12 00:00:00', 'Fully-Funded', 'Japan', 'People University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:18:54', '2021-08-18 01:18:54'),
(18, 'Scholarship', 'miba-university', 'Master,Phd', 'Miba University', '611cbbae91a5djapan_scholar.jpeg', '2021-11-17 00:00:00', '2021-12-25 00:00:00', 'Fully-Funded', 'Japan', 'Miba University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:20:06', '2021-08-18 01:20:06'),
(19, 'Scholarship', 'yangon-university', 'Master,Phd', 'Yangon University', '611cbbbb83babjapan_scholar.jpeg', '2021-11-17 00:00:00', '2022-01-08 00:00:00', 'Fully-Funded', 'Japan', 'Yangon University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 01:20:19', '2021-08-18 01:20:19'),
(20, 'Scholarship', 'yangon-university', 'Undergraduate,Master,Phd', 'Yangon University', '611ccf40b56f5japan_scholar.jpeg', '2021-11-17 00:00:00', '2022-02-05 00:00:00', 'Fully-Funded', 'Japan', 'Yangon University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'https://www.youtube.com', 'https://www.youtube.com', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(22, 'Scholarship', 'yangon-university-of-business', 'Fellowship', 'Yangon University of Business', '611e7ec009e3bBasic Frontend Web Development (1).png', '2021-11-17 00:00:00', '2022-02-05 00:00:00', 'Partial-Funded', 'Singapore', 'Yangon University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 07:21:11', '2021-08-19 09:27:43'),
(32, 'Scholarship', 'usa-scholar', 'Undergraduate', 'USA Scholar', '611e09e6ba1adjp_scholar.jpeg', '2021-08-20 00:00:00', '2021-09-11 00:00:00', 'Partial-Funded', 'Korea', 'Future Global Leadership Program', 'Japan🇯🇵က Future Global Leadership Program မှာ Japanese Language မလိုဘဲ ပါဝင်လို့ ရနေပါပြီ…🤩\r\nMina-san, konnichiwa!🎌 Take Your Time မှပြန်လည်ကြိုဆိုလိုက်ပါတယ် ခင်ဗျာ…🙆\r\nဒီတခေါက် TYTimers တို့အတွက် Japan စာမလိုဘဲ တက်ရောက်လို့ရမယ့် Japan Universities’ programs တွေကို မိတ်ဆက်ပေးနေတဲ့ ဒီ series ရဲ့ တတိယမြောက် content လေးမှာတော့ Tohoku University က Future Global Leadership (FGL) Program (English-Taught) အကြောင်းကိုပြောပြပေးသွားမှာဖြစ်ပါတယ်…🎉🎉\r\nလူဦးရေ 1 million နဲ့ Sendai မြို့လေးမှာ ရှိတဲ့ 🏫Tohoku University🏫ကိုတော့ 1907 ခုနစ်လောက်တုန်းက Japan 🇯🇵 နိုင်ငံ ရဲ့ 🚩Third National University🚩 အဖြစ် တည်ထောင်ခဲ့ပြီး ယခု လက်ရှိမှာလည်း Japan နိုင်ငံရဲ့ တခြားသော Leading Universities တွေကြား Ranked Number One🚩 အပြင် Global Universities Ranking - 269 အနေနဲ့ ဆက်လက်ရပ်တည်နေတာပါ။ ခေတ်အဆက်ဆက် ကြီးမားတဲ့ Achievements တွေနဲ့ အတူ Research အသားပေးတဲ့ ပညာရေးကို ထိန်းသိမ်းထားနိုင်လို့လည်း လူသိများလာရတဲ့ Uni တခု ဖြစ်ပါတယ်…🧑‍🎓\r\n🏫Tohoku ကနေ ပြင်ဆင်ပေးနေတဲ့ ဒီ program မှာတော့ Undergraduate Degree Courses (3) ခုပါဝင်ပြီး English Language နဲ့ သင်ကြားပေးသွားဖို့ရှိပါတယ်…🧑‍🏫\r\n👉Advanced Molecular Chemistry (AMC)\r\nhttp://web.tohoku.ac.jp/amc/ \r\n👉International Mechanical and Aerospace Engineering (IMAC-U) နဲ့\r\nhttp://www.imac.mech.tohoku.ac.jp/ \r\n👉Applied Marine Biology (AMB)\r\nhttps://www.agri.tohoku.ac.jp/amb/ \r\nစတဲ့ Courses (3) ခုကို Foundation ခိုင်ခိုင်၊ အခြေခံကျကျ ပို့ချပေးသွားမှာဖြစ်တဲ့အပြင် နောက်ဆုံးပေါ် Research တွေကိုလည်း လက်တွေ့လုပ်ဆောင်ရမယ့် အခွင့်ရေးတွေပါဝင်တာကြောင့် စိတ်ဝင်စားတဲ့ TYTimers တို့အနေနဲ့ ကြိုက်နှစ်သက်တဲ့ Field တခုချင်းစီရဲ့ Website ကို အပေါ်ကပေးထားတဲ့ Links တွေထဲဝင်ရောက် လေ့လာနိုင်ပါတယ်…✌️✌️\r\nFGL Program Pamphlet: \r\nhttps://www.insc.tohoku.ac.jp/.../FGL_pamphlet... \r\n☑️ Syllabus Directory နဲ့ပက်သတ်ပြီး သိရှိချင်တယ်ဆိုရင် ပေးထားတဲ့ Links တွေထဲ မှာဝင်ရောက် ပေးဖို့တိုက်တွန်းပါရစေ…\r\n1) Advanced Molecular Chemistry (AMC)\r\nhttps://qsl.cds.tohoku.ac.jp/qsl/syllabus/find?type=rigaku \r\n2) International Mechanical and Aerospace Engineering (IMAC-U)\r\nhttps://qsl.cds.tohoku.ac.jp/qsl/syllabus/find?type=kougaku \r\n3) Applied Marine Biology (AMB) \r\nhttps://qsl.cds.tohoku.ac.jp/qsl/syllabus/find?type=nougaku \r\nကိုယ်တက်ရောက်ချင်တဲ့ Class ရဲ့ Syllabus ကို ရှာတွေ့ဖို့ အတွက် အသုံးပြုပုံ အနေနဲ့က Search Box မှာ *AMC*/*IMAC* နဲ့ *Applied Marine Biology* (ဒီတခုကတော့ *AMB*လို့ ရိုက်နှိပ်ပြီးရှာရင်မပေါ်တဲ့အတွက်) ဆိုတဲ့ Keywords တွေကို ရိုက်ထည့်လိုက်ရုံပါဘဲ ခင်ဗျ…💁', 'http://www.tohoku.ac.jp/en/admissions/financial_aid.html', 'https://www.insc.tohoku.ac.jp/.../undergraduate-english/...', 'Application Guideline PDF: \r\nhttps://www.insc.tohoku.ac.jp/.../FGL-Application-Guide... \r\nApplication Process မှာ လိုအပ်မယ့် Documents 🗂️တွေရဲ့ Sample လေးတွေ အတွက် Links:\r\n📌 Download: Statement of Reasons for Applying Form\r\nhttps://www.insc.tohoku.ac.jp/.../Statement_of_reasons... \r\n📌 Download: Graduate Certificate Sample (ကိုယ့်ရဲ့ ကိုယ်ပိုင် School Format လည်းအသုံးပြုလို့ရပါတယ်)\r\nhttps://www.insc.tohoku.ac.jp/.../SAMPLE_Graduate... \r\n📌 Download: Letter on English Proficiency Sample\r\nhttps://www.insc.tohoku.ac.jp/.../FGL_Sample-format... \r\n📌 Examination Fee Instruction \r\nhttps://www.insc.tohoku.ac.jp/.../FGL_application-fee... \r\n💵 Fees ကိုတော့ Application၊ Entrance (Admission Fee) နဲ့ Tuition ဆိုပြီးတော့ ဖော်ပြပေးထားပါတယ်…💁\r\n✔️ Application Fee: JPY 5,000 (Application/Exam အတွက် တစ်ကြိမ်ဘဲပေးသွင်းရမှာပါ)\r\n✔️ Entrance (Admission Fee): JPY 282,000 (Paid once)\r\n✔️ Tuition Fee: JPY 267,900 (Every semester တိုင်းမှာပေးသွင်းဖို့နဲ့ Payment deadline ကိုလည်း after acceptance မှာကြေညာပေးသွားဖို့ရှိပါတယ်)\r\nအကယ်လို့ Admissions Process (Or) Program အတွင်း Revised Fees ရတဲ့အခါ မှာလည်း New Fees ကို revision ရတဲ့အချိန်မှာ ဘဲ Apply လုပ်ပေးရပါမယ်…💁\r\nဒီအပိုင်းနဲ့ဆက်စပ်ပြီးတော့ထပ်မံသိချင်တယ်ဆိုရင်http://www.tohoku.ac.jp/en/admissions/tutition_fees.htmlထဲကို ဝင်ရောက် ကြည့်ရှုပေးပါ ခင်ဗျာ…✌️\r\n💰Financial Support💰အနေနဲ့ Tohoku University ကနေပြီးတော့ International Students တွေအတွက် Japanese Government (MEXT) Scholarship၊ President Fellowship အပြင် Privately Financed International Students တွေအတွက် MEXT Honors Scholarship တို့ကိုလည်း Academic Ability အရ ပြင်ဆင်ပေးထားပါသေးတယ်…👍', '2021-08-19 01:06:06', '2021-08-19 01:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `undergraduates`
--

CREATE TABLE `undergraduates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scholarship_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_application_date` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `funding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `given_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `official_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_form_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `undergraduates`
--

INSERT INTO `undergraduates` (`id`, `scholarship_id`, `slug`, `type`, `title`, `image`, `start_application_date`, `deadline`, `funding`, `country`, `given_by`, `details`, `official_website`, `apply_form_link`, `other_information`, `created_at`, `updated_at`) VALUES
(1, 10, 'security-systems-installer-or-fire-alarm-systems-installer', 'Undergraduate', 'Commercial Diver', 'https://via.placeholder.com/640x480.png/0066bb?text=praesentium', '2011-10-29 22:09:59', '2021-08-06 18:37:51', 'fully-funded', 'Palestinian Territories', 'Wolff, Lubowitz and Wisoky', 'Maxime aliquam eos repellat possimus eum sed. Est totam aut autem. Eos voluptas quas excepturi et ullam aspernatur eos odit.', 'http://medhurst.com/iusto-deleniti-qui-laudantium-nesciunt-quidem', 'https://pagac.info/rerum-cupiditate-molestiae-natus-recusandae-dignissimos-culpa-nisi-tenetur.html', 'Sunt iusto quibusdam aut earum aliquam sed nihil debitis. Maxime adipisci minima dolorum corrupti. Aperiam dignissimos repellendus enim velit asperiores quo.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(2, 10, 'hvac-mechanic', 'Undergraduate', 'Plant Scientist', 'https://via.placeholder.com/640x480.png/00aadd?text=odit', '1979-08-12 16:12:21', '2018-09-23 02:13:59', 'fully-funded', 'Tuvalu', 'Morar-Strosin', 'Harum ipsa sit quaerat modi rerum. Delectus sunt sed officiis sunt id. Aut autem consectetur laborum. Laudantium sint qui molestiae asperiores accusamus et ullam.', 'http://bednar.com/', 'http://www.shanahan.com/veniam-cupiditate-asperiores-eveniet-explicabo-voluptates-eligendi-odit.html', 'Neque consequatur amet aut consequatur voluptas. Maxime ut voluptas hic consequatur ipsum. Quia harum autem minus.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(3, 12, 'artillery-officer', 'Undergraduate', 'Animal Trainer', 'https://via.placeholder.com/640x480.png/00cc11?text=eos', '1994-09-09 01:52:30', '1991-05-11 03:38:57', 'partial-funded', 'Qatar', 'Simonis Ltd', 'Beatae illo fugit reiciendis dolore omnis. Maxime dicta tenetur est et fugiat ut a.', 'http://www.maggio.com/et-magni-beatae-ea', 'http://www.beatty.info/', 'Vitae non est at iste ducimus. Voluptatibus quas aliquid vero ex quia sapiente.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(4, 8, 'financial-analyst', 'Undergraduate', 'Sound Engineering Technician', 'https://via.placeholder.com/640x480.png/0077aa?text=repellendus', '2004-08-11 14:54:28', '1994-02-28 21:02:12', 'partial-funded', 'Spain', 'Runolfsdottir LLC', 'Consequatur omnis voluptas dolor distinctio est sunt accusantium. Aut fugit totam temporibus odio et harum voluptatem. Voluptatem ducimus pariatur et quasi.', 'http://www.hermiston.info/', 'https://www.ernser.com/id-doloremque-voluptatum-odit-accusamus-architecto-asperiores', 'Expedita veniam facere non qui est sed ad. Dolor ducimus voluptatibus culpa molestiae quas. Rem vel ut nesciunt vel.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(5, 5, 'meat-packer', 'Undergraduate', 'Glazier', 'https://via.placeholder.com/640x480.png/00bbaa?text=possimus', '1983-06-25 10:18:39', '2012-10-15 18:32:22', 'partial-funded', 'Switzerland', 'Bogisich, Keeling and Weber', 'Doloribus qui possimus consequatur in quo. Odio cupiditate deserunt molestiae sapiente. Id quia ipsum voluptas soluta suscipit est.', 'http://cummings.biz/', 'https://gusikowski.com/quae-quam-perferendis-perspiciatis-modi-consequuntur-exercitationem-et.html', 'Et eos itaque qui magnam error non explicabo. Nam voluptatem vitae dolores omnis dolorem tempora reiciendis. Dolorem quod ad natus officia.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(6, 3, 'correctional-officer', 'Undergraduate', 'Manager Tactical Operations', 'https://via.placeholder.com/640x480.png/004422?text=itaque', '1985-08-13 14:01:01', '1976-12-10 18:23:09', 'partial-funded', 'Samoa', 'Mills-Mraz', 'Recusandae nostrum aliquam voluptatibus laborum ut assumenda consectetur. Sit maiores delectus id omnis officiis molestiae. Odio dicta inventore ut excepturi eligendi qui.', 'https://dietrich.com/cupiditate-ipsa-quaerat-tempora-impedit-quis.html', 'https://nitzsche.info/est-suscipit-voluptatum-autem-facere-fugit-magnam.html', 'Maiores tenetur ut et praesentium. Eum corporis molestiae enim ratione. Neque itaque dolorem laudantium cum.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(7, 5, 'database-manager', 'Undergraduate', 'Sound Engineering Technician', 'https://via.placeholder.com/640x480.png/008833?text=id', '2018-12-01 22:47:17', '1990-03-07 04:07:45', 'self-funded', 'Italy', 'Altenwerth-Morissette', 'Rerum enim sed officiis libero cum et. Mollitia eos sit libero velit. Deleniti et temporibus numquam tempore eligendi omnis. Ab non rerum et et adipisci. Quo voluptatem molestias ab est eos dolores.', 'https://labadie.biz/veniam-ut-est-veritatis-neque-cupiditate-ratione.html', 'https://www.miller.com/quas-aut-nihil-et-et-non', 'Harum sapiente dolore in eveniet quia. Ut velit necessitatibus exercitationem est et. Dolorem qui non qui sunt est dolores enim.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(8, 7, 'emergency-management-specialist', 'Undergraduate', 'Computer Software Engineer', 'https://via.placeholder.com/640x480.png/004411?text=deserunt', '1970-07-09 03:04:21', '1989-06-25 22:01:36', 'self-funded', 'Costa Rica', 'Streich Ltd', 'Consequuntur sed hic vitae nihil. Aperiam eaque id quo minus quod omnis. Rerum quisquam est quis officiis fuga. Totam ut sed repellat et.', 'http://fisher.com/velit-eaque-architecto-nostrum-quis', 'http://brekke.com/soluta-in-impedit-numquam-totam-quisquam.html', 'Nisi harum autem aliquid sunt ea est. Dolorum sit qui aut et consequatur. Harum quas ut ullam eveniet.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(9, 12, 'computer-programmer', 'Undergraduate', 'Distribution Manager', 'https://via.placeholder.com/640x480.png/0066aa?text=sit', '2014-02-13 04:41:58', '2004-10-23 17:00:31', 'self-funded', 'Guatemala', 'Friesen and Sons', 'Dolor saepe nesciunt laudantium odio dolor. Consequatur qui quos sint impedit autem laborum. Sapiente ut non et voluptatibus a et odio cumque. Voluptate beatae nobis omnis id itaque. Sit doloribus atque ut culpa odio dolores voluptate.', 'https://kling.com/veritatis-nisi-odio-non.html', 'http://kuphal.org/magnam-doloremque-eligendi-impedit-culpa-quibusdam-labore-est', 'Sint ea autem sequi expedita voluptatibus aperiam. Velit consectetur ipsa ducimus suscipit. Optio reiciendis commodi autem eaque architecto. Accusantium facilis minus deserunt repudiandae hic et.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(10, 9, 'telecommunications-line-installer', 'Undergraduate', 'Automatic Teller Machine Servicer', 'https://via.placeholder.com/640x480.png/001188?text=beatae', '1976-04-01 05:14:56', '2001-08-29 10:06:47', 'self-funded', 'United Arab Emirates', 'Luettgen, Anderson and Gutmann', 'Enim dolorem quos dolorem esse exercitationem. Quam quis facere qui quasi. Vitae aut reprehenderit eius architecto alias nam cum.', 'https://bauch.info/doloribus-voluptatibus-aperiam-voluptas-nihil-magni-et.html', 'http://www.shields.org/', 'Officiis quaerat quo quod inventore minus sit ea omnis. Qui accusantium suscipit quasi rem. Harum beatae tempora fugit non. Facere aut dolores quia sint non.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(11, 10, 'general-farmworker', 'Undergraduate', 'Broadcast Technician', 'https://via.placeholder.com/640x480.png/000000?text=beatae', '1975-10-21 13:03:13', '1980-06-30 19:38:30', 'partial-funded', 'Central African Republic', 'Koss PLC', 'Aut quasi ratione quas totam. Nulla facere itaque id est voluptatem quas. Delectus non id libero aut. Officiis temporibus expedita odit non. Quis quis et nemo molestias consequuntur rerum.', 'http://www.okon.com/ad-et-molestias-itaque-consectetur-ea.html', 'http://funk.org/mollitia-molestiae-corrupti-velit-et', 'Reiciendis quasi vel quia doloremque omnis debitis accusamus. Dignissimos et id officiis vel voluptatibus in beatae. Soluta nihil sit in optio rem.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(12, 4, 'electronics-engineering-technician', 'Undergraduate', 'Auditor', 'https://via.placeholder.com/640x480.png/0077ee?text=ab', '2009-01-21 12:43:34', '1976-12-12 03:20:01', 'fully-funded', 'Anguilla', 'Gutkowski-Sporer', 'Cumque quaerat a incidunt fuga cupiditate deserunt. Tenetur aut perspiciatis voluptatem sed iure ut. Dolore et exercitationem unde odio.', 'https://www.brown.com/non-sit-dolore-voluptatem-odit', 'http://schmeler.com/', 'Veniam officiis ut qui quas illum. Est animi modi iure dolores aliquid nam nihil molestiae. Error cum nihil numquam. Quam consequatur nihil commodi dolorem aperiam pariatur est.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(13, 13, 'graduate-teaching-assistant', 'Undergraduate', 'Mapping Technician', 'https://via.placeholder.com/640x480.png/00dd66?text=autem', '1981-10-16 13:45:36', '2009-03-10 22:57:37', 'self-funded', 'Romania', 'Goldner LLC', 'Laudantium dolores ut officiis et. Laboriosam eveniet voluptatem saepe earum cupiditate et. Nulla deserunt harum consequatur molestiae molestias sit nulla. Id voluptas et voluptatem commodi sint. Quis quisquam quam maiores dolorem distinctio.', 'http://bogan.com/tempore-voluptatem-rerum-fugit-in-sed-molestiae-quam-reiciendis.html', 'https://cummings.biz/architecto-temporibus-dolorem-pariatur.html', 'Sit molestiae qui expedita voluptatibus. Voluptatem et quidem recusandae ut harum sed asperiores. At architecto ab qui nihil ab. Earum reprehenderit harum ea aliquid sint consequuntur consectetur. Nobis cupiditate quam architecto alias beatae.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(14, 2, 'transportation-attendant', 'Undergraduate', 'Warehouse', 'https://via.placeholder.com/640x480.png/00bb66?text=sint', '1998-01-25 14:11:03', '1990-09-17 18:58:05', 'self-funded', 'Gibraltar', 'Miller Ltd', 'Non temporibus id distinctio tenetur similique. Repellendus molestias quia rerum delectus expedita. At est delectus voluptatem voluptatem illo nihil. Aliquam voluptatibus a quos eveniet eaque ex cupiditate. Dolorem possimus temporibus enim delectus minus similique hic.', 'http://www.trantow.com/magni-sint-non-ab-voluptatem-corrupti-doloribus-qui-accusantium', 'http://www.kuphal.com/quae-minima-qui-rem-aperiam-quo-fuga-quo-doloremque', 'Aut exercitationem perspiciatis iusto. Id cumque quidem autem sed expedita labore. Perspiciatis exercitationem amet nulla sed voluptatibus et. Sit et est quasi esse dolor qui.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(15, 2, 'personnel-recruiter', 'Undergraduate', 'Ophthalmic Laboratory Technician', 'https://via.placeholder.com/640x480.png/00ff11?text=quaerat', '1989-10-07 00:14:40', '2010-08-09 05:16:45', 'partial-funded', 'Peru', 'Ondricka Ltd', 'Consectetur cupiditate sint quasi reprehenderit incidunt provident nesciunt. Impedit ut qui nihil aliquam. Deleniti et optio molestiae. Libero aliquam quam error et temporibus. Laborum debitis quia dignissimos hic ratione.', 'http://parker.com/', 'http://sanford.com/nisi-nesciunt-facilis-voluptas-repellat.html', 'Sequi alias doloribus rerum ducimus explicabo aspernatur. Nihil nulla quia veritatis vero et sed aut sunt. Explicabo reiciendis laborum beatae velit nihil. Dolor commodi nesciunt repellat nesciunt expedita deserunt. Rerum ea rerum neque repudiandae quam.', '2021-08-18 01:18:23', '2021-08-18 01:18:23'),
(16, 20, 'yangon-university', 'Undergraduate', 'Yangon University', '611ccf40b56f5japan_scholar.jpeg', '2021-11-17 00:00:00', '2022-02-05 00:00:00', 'Fully-Funded', 'Japan', 'Yangon University', 'Grab your chance to study at University of Tokyo ✨\r\n(For Undergraduate Students)\r\nHello Hello...... TYTimers လေးများခင်ဗျာ 🙋‍♂️\r\nကျွန်တော်တို့ပြီးခဲ့တဲ့ရက်တွေက TYT ကနေပြီးတော့ 🌸 Japan Universities တွေရဲ့ All-English Programs တွေကို series အနေနဲ့တင်ပေးလာတာဆိုရင်စတုတ္ထမြောက် content ကိုရောက်ရှိလာပါပြီခင်ဗျာ။  ဒီနေ့မှာတော့ Japan နိုင်ငံရဲ့ Ranking ထိပ်မှာရပ်တည်နေတဲ့ 🏔️ University Of Tokyo (UTokyo) ကနေ Undergraduate Alumni တွေအတွက် All-English Programs တွေ offer ပေးနေတဲ့အကြောင်းပြောပြပေးသွားမှာပါခင်ဗျ ...\r\nUniversity of Tokyo ဆိုတာကတော့ 🗻 Japan နိုင်ငံရဲ့ Ranking တွေမှာကော၊ QS World Ranking ရဲ့ထိပ်မှာပါရပ်တည်နေတဲ့ Public Research University တစ်ခုပါ။ Campus ကြီးကလဲကျယ်သလိုပေးထားတဲ့ facilities တွေကလဲ မျက်စိကျစရာကောင်းပါတယ် 🤩\r\nUTokyo ကိုနောက်တစ်မျိုးအနေနဲ့ Todai University ဆိုပြီးခေါ်ကြပါတယ်။ UTokyo ကနေ Graduated ဖြစ်သွားပြီးတော့ CEO position ကိုရောက်ရှိခဲ့တဲ့ Alumni အရေအတွက်မှာလဲ Harvard University လိုမျိူးနဲ့တောင်အပြိုင်ဖြစ်ခဲ့ပါသေးတယ် ...\r\nCultural Facilities တွေအနေနဲ့ဆို\r\n📚 Library System\r\n🏛️ Museum\r\n🌱 Botanical Gardens တွေအပြင် 🏸 Athletic Facilities တွေလဲအမြောက်အမြားရှိပါတယ်။\r\nPublic Research Program တွေအတွက် ITO International Research Center ကိုလဲဖွင့်လှစ်ပေးထားပါသေးတယ်ခင်ဗျ\r\nစိတ်ဝင်စားသွားကြပြီလားဗျ ...🙄\r\nစိတ်ဝင်စားသွားပြီဆိုရင်တော့ ကျွန်တော်တို့ TYT ကနေပြီးတော့ဒီက Undergraduate Student လေးတွေအတွက် University of Tokyo ကို scholar နဲ့ English Programs နှစ်ခုတက်ရောက်နိုင်မဲ့အခွင့်အလမ်းလေးကိုမိတ်ဆက်ပေးချင်ပါတယ်ခင်ဗျ 💁‍♂️\r\nUniversity of Tokyo အနေနဲ့နိုင်ငံရပ်ဝန်းကကျောင်းသားတွေအတွက်ဒီလို Undergraduate Programs တွေကို 2012 လောက်ထဲကစပြီး offer ပေးခဲ့တာအခုချိန်ထိပါပဲ။ ❕ အဓိကရည်ရွယ်ချက်ကတော့ Japanese နဲ့ပတ်သတ်ပြီးအရမ်းမတတ်ကျွမ်းတဲ့ကျောင်းသားတွေအတွက် English only အနေနဲ့ Japan နိုင်ငံမှာပညာသင်ကြားနိုင်ဖို့ PEAK နဲ့ GSC Programme နှစ်ခုကို offer ပေးထားပါတယ် ...\r\nPrograms in English at Komaba ( PEAK)\r\nပထမဆုံးအနေနဲ့ကမ္ဘာတစ်ဝှမ်းက Art နဲ့ပတ်သတ်ပြီး စိတ်ဝင်စားတဲ့ကျောင်းသားတွေအတွက် College of Arts and Sciences ကနေ offer လုပ်ထားတဲ့\r\n\"International Program on Japan in East Asia\" နဲ့\r\n\"International Program on Environmental Sciences\"  ဆိုတဲ့ programs နှစ်ခုကိုပြောပြချင်ပါတယ် ....\r\nဒီ programs နှစ်ခုလုံးက All in English နဲ့သင်မှာဖြစ်ပြီးတော့  Japanese proficiency မလိုအပ်ပါဘူး။ အဓိကသင်ကြားရမှာကတော့ Liberal Arts နဲ့ပတ်သတ်တာတွေဖြစ်ပြီးတော့ပထမ(၂)နှစ် Junior Division ပြီးတဲ့အခါကြရင် Senior Division မှာ Specialized Studies တွေဆက်သင်ရမှာဖြစ်ပါတယ်.....\r\nPEAK မှာဆိုရင် Non-Japanese Students တွေအပြင် Native Students တွေလဲရှိပါတယ်။ Junior Division မှာတော့ Majority Class တွေအကုန်လုံးအတူတူနီးပါးလောက်ပါပဲ..... Programs တွေကိုတော့ September 22, 2022 မှာစပြီး enroll လုပ်မှာဖြစ်ပါတယ်\r\n❗Application Period ❗\r\nNovember 22 to December 22, 2021\r\n❗Application Fee 5,000 JPY 💸', 'www.iup.kyoto-u.ac.jp', 'http://www.iup.kyoto-u.ac.jp/.../Application%20Guidelines...', '👇 Below link is for other scholarships available for this program :\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000232.html\r\n✔️ Scholar နဲ့မပါဝင်ခဲ့တဲ့သူတွေအနေနဲ့လဲကိုယ်ပိုင် financial support  နဲ့တက်ချင်တယ်ဆိုရင်\r\nhttps://peak.c.u-tokyo.ac.jp/fees.../l3/Vcms3_00000197.html  မှာအသေးစိတ် fees တွေကိုကြည့်လို့ရပါတယ်ခင်ဗျ.....\r\n☑️ Application Guidelines Download Link\r\nhttps://peak.c.u-tokyo.ac.jp/.../ApplicationGuidelines...', '2021-08-18 02:43:36', '2021-08-18 02:43:36'),
(19, 32, 'usa-scholar', 'Undergraduate', 'USA Scholar', '611e09e6ba1adjp_scholar.jpeg', '2021-08-20 00:00:00', '2021-09-11 00:00:00', 'Partial-Funded', 'Korea', 'Future Global Leadership Program', 'Japan🇯🇵က Future Global Leadership Program မှာ Japanese Language မလိုဘဲ ပါဝင်လို့ ရနေပါပြီ…🤩\r\nMina-san, konnichiwa!🎌 Take Your Time မှပြန်လည်ကြိုဆိုလိုက်ပါတယ် ခင်ဗျာ…🙆\r\nဒီတခေါက် TYTimers တို့အတွက် Japan စာမလိုဘဲ တက်ရောက်လို့ရမယ့် Japan Universities’ programs တွေကို မိတ်ဆက်ပေးနေတဲ့ ဒီ series ရဲ့ တတိယမြောက် content လေးမှာတော့ Tohoku University က Future Global Leadership (FGL) Program (English-Taught) အကြောင်းကိုပြောပြပေးသွားမှာဖြစ်ပါတယ်…🎉🎉\r\nလူဦးရေ 1 million နဲ့ Sendai မြို့လေးမှာ ရှိတဲ့ 🏫Tohoku University🏫ကိုတော့ 1907 ခုနစ်လောက်တုန်းက Japan 🇯🇵 နိုင်ငံ ရဲ့ 🚩Third National University🚩 အဖြစ် တည်ထောင်ခဲ့ပြီး ယခု လက်ရှိမှာလည်း Japan နိုင်ငံရဲ့ တခြားသော Leading Universities တွေကြား Ranked Number One🚩 အပြင် Global Universities Ranking - 269 အနေနဲ့ ဆက်လက်ရပ်တည်နေတာပါ။ ခေတ်အဆက်ဆက် ကြီးမားတဲ့ Achievements တွေနဲ့ အတူ Research အသားပေးတဲ့ ပညာရေးကို ထိန်းသိမ်းထားနိုင်လို့လည်း လူသိများလာရတဲ့ Uni တခု ဖြစ်ပါတယ်…🧑‍🎓\r\n🏫Tohoku ကနေ ပြင်ဆင်ပေးနေတဲ့ ဒီ program မှာတော့ Undergraduate Degree Courses (3) ခုပါဝင်ပြီး English Language နဲ့ သင်ကြားပေးသွားဖို့ရှိပါတယ်…🧑‍🏫\r\n👉Advanced Molecular Chemistry (AMC)\r\nhttp://web.tohoku.ac.jp/amc/ \r\n👉International Mechanical and Aerospace Engineering (IMAC-U) နဲ့\r\nhttp://www.imac.mech.tohoku.ac.jp/ \r\n👉Applied Marine Biology (AMB)\r\nhttps://www.agri.tohoku.ac.jp/amb/ \r\nစတဲ့ Courses (3) ခုကို Foundation ခိုင်ခိုင်၊ အခြေခံကျကျ ပို့ချပေးသွားမှာဖြစ်တဲ့အပြင် နောက်ဆုံးပေါ် Research တွေကိုလည်း လက်တွေ့လုပ်ဆောင်ရမယ့် အခွင့်ရေးတွေပါဝင်တာကြောင့် စိတ်ဝင်စားတဲ့ TYTimers တို့အနေနဲ့ ကြိုက်နှစ်သက်တဲ့ Field တခုချင်းစီရဲ့ Website ကို အပေါ်ကပေးထားတဲ့ Links တွေထဲဝင်ရောက် လေ့လာနိုင်ပါတယ်…✌️✌️\r\nFGL Program Pamphlet: \r\nhttps://www.insc.tohoku.ac.jp/.../FGL_pamphlet... \r\n☑️ Syllabus Directory နဲ့ပက်သတ်ပြီး သိရှိချင်တယ်ဆိုရင် ပေးထားတဲ့ Links တွေထဲ မှာဝင်ရောက် ပေးဖို့တိုက်တွန်းပါရစေ…\r\n1) Advanced Molecular Chemistry (AMC)\r\nhttps://qsl.cds.tohoku.ac.jp/qsl/syllabus/find?type=rigaku \r\n2) International Mechanical and Aerospace Engineering (IMAC-U)\r\nhttps://qsl.cds.tohoku.ac.jp/qsl/syllabus/find?type=kougaku \r\n3) Applied Marine Biology (AMB) \r\nhttps://qsl.cds.tohoku.ac.jp/qsl/syllabus/find?type=nougaku \r\nကိုယ်တက်ရောက်ချင်တဲ့ Class ရဲ့ Syllabus ကို ရှာတွေ့ဖို့ အတွက် အသုံးပြုပုံ အနေနဲ့က Search Box မှာ *AMC*/*IMAC* နဲ့ *Applied Marine Biology* (ဒီတခုကတော့ *AMB*လို့ ရိုက်နှိပ်ပြီးရှာရင်မပေါ်တဲ့အတွက်) ဆိုတဲ့ Keywords တွေကို ရိုက်ထည့်လိုက်ရုံပါဘဲ ခင်ဗျ…💁', 'http://www.tohoku.ac.jp/en/admissions/financial_aid.html', 'https://www.insc.tohoku.ac.jp/.../undergraduate-english/...', 'Application Guideline PDF: \r\nhttps://www.insc.tohoku.ac.jp/.../FGL-Application-Guide... \r\nApplication Process မှာ လိုအပ်မယ့် Documents 🗂️တွေရဲ့ Sample လေးတွေ အတွက် Links:\r\n📌 Download: Statement of Reasons for Applying Form\r\nhttps://www.insc.tohoku.ac.jp/.../Statement_of_reasons... \r\n📌 Download: Graduate Certificate Sample (ကိုယ့်ရဲ့ ကိုယ်ပိုင် School Format လည်းအသုံးပြုလို့ရပါတယ်)\r\nhttps://www.insc.tohoku.ac.jp/.../SAMPLE_Graduate... \r\n📌 Download: Letter on English Proficiency Sample\r\nhttps://www.insc.tohoku.ac.jp/.../FGL_Sample-format... \r\n📌 Examination Fee Instruction \r\nhttps://www.insc.tohoku.ac.jp/.../FGL_application-fee... \r\n💵 Fees ကိုတော့ Application၊ Entrance (Admission Fee) နဲ့ Tuition ဆိုပြီးတော့ ဖော်ပြပေးထားပါတယ်…💁\r\n✔️ Application Fee: JPY 5,000 (Application/Exam အတွက် တစ်ကြိမ်ဘဲပေးသွင်းရမှာပါ)\r\n✔️ Entrance (Admission Fee): JPY 282,000 (Paid once)\r\n✔️ Tuition Fee: JPY 267,900 (Every semester တိုင်းမှာပေးသွင်းဖို့နဲ့ Payment deadline ကိုလည်း after acceptance မှာကြေညာပေးသွားဖို့ရှိပါတယ်)\r\nအကယ်လို့ Admissions Process (Or) Program အတွင်း Revised Fees ရတဲ့အခါ မှာလည်း New Fees ကို revision ရတဲ့အချိန်မှာ ဘဲ Apply လုပ်ပေးရပါမယ်…💁\r\nဒီအပိုင်းနဲ့ဆက်စပ်ပြီးတော့ထပ်မံသိချင်တယ်ဆိုရင်http://www.tohoku.ac.jp/en/admissions/tutition_fees.htmlထဲကို ဝင်ရောက် ကြည့်ရှုပေးပါ ခင်ဗျာ…✌️\r\n💰Financial Support💰အနေနဲ့ Tohoku University ကနေပြီးတော့ International Students တွေအတွက် Japanese Government (MEXT) Scholarship၊ President Fellowship အပြင် Privately Financed International Students တွေအတွက် MEXT Honors Scholarship တို့ကိုလည်း Academic Ability အရ ပြင်ဆင်ပေးထားပါသေးတယ်…👍', '2021-08-19 01:06:06', '2021-08-19 01:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'tyt_admin1', 'tyt_admin@gmail.com', NULL, '$2y$10$6QXcSnDIFtVVQxEx2jtXqOK4U0U4vS30bWYh8.2K66BCBuQC6SgjC', NULL, '2021-08-18 01:18:23', '2021-08-18 01:18:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_posts`
--
ALTER TABLE `all_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefit_conferences`
--
ALTER TABLE `benefit_conferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `benefit_conferences_conference_id_foreign` (`conference_id`);

--
-- Indexes for table `benefit_grants`
--
ALTER TABLE `benefit_grants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `benefit_grants_grant_id_foreign` (`grant_id`);

--
-- Indexes for table `benefit_jobs`
--
ALTER TABLE `benefit_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `benefit_jobs_job_id_foreign` (`job_id`);

--
-- Indexes for table `benefit_others`
--
ALTER TABLE `benefit_others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `benefit_others_other_id_foreign` (`other_id`);

--
-- Indexes for table `benefit_scholarships`
--
ALTER TABLE `benefit_scholarships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `benefit_scholarships_post_id_foreign` (`scholarship_id`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criteria_conferences`
--
ALTER TABLE `criteria_conferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_conferences_conference_id_foreign` (`conference_id`);

--
-- Indexes for table `criteria_grants`
--
ALTER TABLE `criteria_grants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_grants_grant_id_foreign` (`grant_id`);

--
-- Indexes for table `criteria_jobs`
--
ALTER TABLE `criteria_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_jobs_job_id_foreign` (`job_id`);

--
-- Indexes for table `criteria_others`
--
ALTER TABLE `criteria_others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_others_other_id_foreign` (`other_id`);

--
-- Indexes for table `criteria_scholarships`
--
ALTER TABLE `criteria_scholarships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_scholarships_post_id_foreign` (`scholarship_id`);

--
-- Indexes for table `document_jobs`
--
ALTER TABLE `document_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_jobs_job_id_foreign` (`job_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fellowships`
--
ALTER TABLE `fellowships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fellowships_scholarship_id_foreign` (`scholarship_id`);

--
-- Indexes for table `grants`
--
ALTER TABLE `grants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masters_scholarship_id_foreign` (`scholarship_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oppotunity_places`
--
ALTER TABLE `oppotunity_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phds`
--
ALTER TABLE `phds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phds_scholarship_id_foreign` (`scholarship_id`);

--
-- Indexes for table `process_conferences`
--
ALTER TABLE `process_conferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `process_conferences_conference_id_foreign` (`conference_id`);

--
-- Indexes for table `process_grants`
--
ALTER TABLE `process_grants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `process_grants_grant_id_foreign` (`grant_id`);

--
-- Indexes for table `process_others`
--
ALTER TABLE `process_others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `process_others_other_id_foreign` (`other_id`);

--
-- Indexes for table `process_scholarships`
--
ALTER TABLE `process_scholarships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `process_scholarships_post_id_foreign` (`scholarship_id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undergraduates`
--
ALTER TABLE `undergraduates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `undergraduates_scholarship_id_foreign` (`scholarship_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_posts`
--
ALTER TABLE `all_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `benefit_conferences`
--
ALTER TABLE `benefit_conferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `benefit_grants`
--
ALTER TABLE `benefit_grants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `benefit_jobs`
--
ALTER TABLE `benefit_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `benefit_others`
--
ALTER TABLE `benefit_others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `benefit_scholarships`
--
ALTER TABLE `benefit_scholarships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `criteria_conferences`
--
ALTER TABLE `criteria_conferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `criteria_grants`
--
ALTER TABLE `criteria_grants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `criteria_jobs`
--
ALTER TABLE `criteria_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `criteria_others`
--
ALTER TABLE `criteria_others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `criteria_scholarships`
--
ALTER TABLE `criteria_scholarships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `document_jobs`
--
ALTER TABLE `document_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fellowships`
--
ALTER TABLE `fellowships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `grants`
--
ALTER TABLE `grants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oppotunity_places`
--
ALTER TABLE `oppotunity_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `phds`
--
ALTER TABLE `phds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `process_conferences`
--
ALTER TABLE `process_conferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `process_grants`
--
ALTER TABLE `process_grants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `process_others`
--
ALTER TABLE `process_others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `process_scholarships`
--
ALTER TABLE `process_scholarships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `undergraduates`
--
ALTER TABLE `undergraduates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `benefit_conferences`
--
ALTER TABLE `benefit_conferences`
  ADD CONSTRAINT `benefit_conferences_conference_id_foreign` FOREIGN KEY (`conference_id`) REFERENCES `conferences` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `benefit_grants`
--
ALTER TABLE `benefit_grants`
  ADD CONSTRAINT `benefit_grants_grant_id_foreign` FOREIGN KEY (`grant_id`) REFERENCES `grants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `benefit_jobs`
--
ALTER TABLE `benefit_jobs`
  ADD CONSTRAINT `benefit_jobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `benefit_others`
--
ALTER TABLE `benefit_others`
  ADD CONSTRAINT `benefit_others_other_id_foreign` FOREIGN KEY (`other_id`) REFERENCES `others` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `benefit_scholarships`
--
ALTER TABLE `benefit_scholarships`
  ADD CONSTRAINT `benefit_scholarships_post_id_foreign` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarships` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `criteria_conferences`
--
ALTER TABLE `criteria_conferences`
  ADD CONSTRAINT `criteria_conferences_conference_id_foreign` FOREIGN KEY (`conference_id`) REFERENCES `conferences` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `criteria_grants`
--
ALTER TABLE `criteria_grants`
  ADD CONSTRAINT `criteria_grants_grant_id_foreign` FOREIGN KEY (`grant_id`) REFERENCES `grants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `criteria_jobs`
--
ALTER TABLE `criteria_jobs`
  ADD CONSTRAINT `criteria_jobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `criteria_others`
--
ALTER TABLE `criteria_others`
  ADD CONSTRAINT `criteria_others_other_id_foreign` FOREIGN KEY (`other_id`) REFERENCES `others` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `criteria_scholarships`
--
ALTER TABLE `criteria_scholarships`
  ADD CONSTRAINT `criteria_scholarships_post_id_foreign` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarships` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `document_jobs`
--
ALTER TABLE `document_jobs`
  ADD CONSTRAINT `document_jobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fellowships`
--
ALTER TABLE `fellowships`
  ADD CONSTRAINT `fellowships_scholarship_id_foreign` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarships` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `masters`
--
ALTER TABLE `masters`
  ADD CONSTRAINT `masters_scholarship_id_foreign` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarships` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `phds`
--
ALTER TABLE `phds`
  ADD CONSTRAINT `phds_scholarship_id_foreign` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarships` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `process_conferences`
--
ALTER TABLE `process_conferences`
  ADD CONSTRAINT `process_conferences_conference_id_foreign` FOREIGN KEY (`conference_id`) REFERENCES `conferences` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `process_grants`
--
ALTER TABLE `process_grants`
  ADD CONSTRAINT `process_grants_grant_id_foreign` FOREIGN KEY (`grant_id`) REFERENCES `grants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `process_others`
--
ALTER TABLE `process_others`
  ADD CONSTRAINT `process_others_other_id_foreign` FOREIGN KEY (`other_id`) REFERENCES `others` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `process_scholarships`
--
ALTER TABLE `process_scholarships`
  ADD CONSTRAINT `process_scholarships_post_id_foreign` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarships` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `undergraduates`
--
ALTER TABLE `undergraduates`
  ADD CONSTRAINT `undergraduates_scholarship_id_foreign` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarships` (`id`) ON DELETE CASCADE;
