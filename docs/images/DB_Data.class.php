<?php

class DB_Data
{
  public function __construct()
  {
      $this->db = new DB();
      $this->site_configs  = Site_Info::getConfigs();

  }



  public function getProgramTV()
  {
      return array(
        array(
          "title" => "I AM Channel",
          "desc" => "Situs yang menyediakan bahan-bahan untuk pelayanan penjangkauan dan penginjilan.",
          "img" => "",
          "link" => "https://video.iamchannel.org/videos",
        ),
        array(
          "title" => "Pijar TV",
          "desc" => "Stasiun televisi lokal Indonesia yang menayangkan konten-konten Kristiani secara multi-genre.",
          "img" => "",
          "link" => "https://www.youtube.com/c/PIJARTV,https://www.twitch.tv/pijartv",
        ),
        array(
          "title" => "Jawaban",
          "desc" => "Yayasan Cahaya Bagi Negeri (CBN) hadir untuk memberitakan kasih dan kebaikan Tuhan melalui media dengan cara kreatif dan kontekstual.",
          "img" => "",
          "link" => "https://www.youtube.com/c/Jawaban",
        ),
        array(
          "title" => "Cermin Jiwa (LPMI)",
          "desc" => "Kumpulan inspirasi pendek melalui video.",
          "img" => "",
          "link" => "https://www.cerminjiwa.com/",
        ),
        array(
          "title" => "YesHEis",
          "desc" => "yesHEis adalah sebuah aplikasi yang berisi video yang akan membantumu buat ngobrol tentang Yesus ke temen kamu.",
          "img" => "",
          "link" => "https://www.youtube.com/channel/UCytRqOnyrQU7AQOPYCL4C-w",
        ),
        array(
          "title" => "Desiring God",
          "desc" => "Situs yang menyediakan kumpulan bahan kekristenan untuk penjangkauan dan pemuridan.",
          "img" => "",
          "link" => "https://www.youtube.com/user/desiringGod",
        ),
        array(
          "title" => "Seeking Allah, Finding Jesus: The Christian Testimony of Nabeel Qureshi",
          "desc" => "Sebuah kesaksian dari Nabeel Qureshi mengenai pengalamannya mencari Allah dan menemukan Yesus.",
          "img" => "",
          "link" => "https://www.youtube.com/watch?v=k0D8Uz4oQck",
        ),
        array(
          "title" => "Seeking Allah Finding Jesus, Video Study: Session 1",
          "desc" => "Sebuah pembelajaran ketika mencari Allah justru menemukan Yesus.",
          "img" => "",
          "link" => "https://www.youtube.com/watch?v=O9rcFduex1Q",
        ),
        array(
          "title" => "What About Other Religions?",
          "desc" => "Nabeel Quareshi | Metode efektif untuk menjangkau orang yang jauh dari Tuhan.",
          "img" => "",
          "link" => "https://www.youtube.com/watch?v=qzByh4ix_K4",
        ),
        array(
          "title" => "Nabeel Qureshi: Jesus in Islam vs. Jesus in Christianity - Apologetics to Islam",
          "desc" => "Apologetika bagi umat Muslim. Yesus dalam Islam, dan Yesus dalam kekristenan.",
          "img" => "",
          "link" => "https://www.youtube.com/watch?v=QGR08BizLq8",
        ),
        array(
          "title" => "5 Apologetic Questions That Every Christian Should Know How to Answer - Pasi Turunen",
          "desc" => " ",
          "img" => "",
          "link" => "https://www.youtube.com/watch?v=QEFkojJ-QzE",
        ),
        array(
          "title" => "Grace Alone Ministry",
          "desc" => "Yayasan yang bergerak dalam bidang Leadership, Evangelism, Apologetics, dan Preaching.",
          "img" => "",
          "link" => "https://www.youtube.com/gracealoneministry",
        ),
        array(
          "title" => "Radical",
          "desc" => "Radikal hadir untuk melayani gereja dalam menyelesaikan misi Kristus.",
          "img" => "",
          "link" => "https://www.youtube.com/user/ViewRadical",
        ),
        array(
          "title" => "Effective Methods of Evangelism",
          "desc" => "Metode efektif untuk menjangkau orang yang jauh dari Tuhan.",
          "img" => "",
          "link" => "https://www.youtube.com/watch?v=nyd8qo0NSWI",
        ),
        array(
          "title" => "Evangelical Alliance",
          "desc" => "Evangelical Alliance terdiri dari ratusan organisasi, ribuan gereja, dan puluhan ribu individu, bergabung bersama demi Injil.",
          "img" => "",
          "link" => "https://www.youtube.com/user/EvangelicalAlliance",
        ),
        array(
          "title" => "The Gospel Coalition",
          "desc" => "Gospel Coalition mendukung gereja dengan menyediakan sumber daya yang tepercaya dan tepat waktu, menarik dan bijaksana, dan berpusat pada Injil Yesus Kristus.",
          "img" => "",
          "link" => "https://www.youtube.com/c/gospelcoalition",
        ),
        array(
          "title" => "RZIM HQ",
          "desc" => "RZIM HQ percaya bahwa dunia menjadi lebih masuk akal jika kita memiliki pandangan yang benar tentang Tuhan dan dunia.",
          "img" => "",
          "link" => "https://www.youtube.com/user/rzimmedia",
        ),
        array(
          "title" => "What is the best way to share the gospel with total strangers?",
          "desc" => "Pemaparan mengenai cara terbaik untuk membagikan Injil dengan orang yang benar-benar tidak dikenal?",
          "img" => "",
          "link" => "https://www.youtube.com/watch?v=TQvzOSHUkIo",
        ),

      );
  }


  public function getArtikel()
  {
      return array(
          array(
            "title" => "Artikel publikasi e-Misi",
            "desc" => "penginjilan tidak lagi harus dilakukan secara konvensional. Perkembangan teknologi memungkinkan kita melakukan misi dan penginjilan dengan platform dan cara-cara yang baru, yang justru dapat menjangkau lebih banyak orang. Media sosial dan situs-situs Kristen sesungguhnya dapat menjadi media yang efektif untuk membawa pesan Injil, dan semuanya dapat diakses dengan ujung jari melalui gawai yang kita miliki.",
            "link" => "https://misi.sabda.org/artikel_artikel_misi",
          ),
          array(
            "title" => "Artikel nonpublikasi e-Misi",
            "desc" => "Apakah tujuan hidup Kristen bisa dilepaskan dari keberadaan Allah dan rencana-Nya? Hanya dalam kerangka hidup memuliakan Allah saja orang Kristen menemukan dan mengalami makna hidup yang sejati dan hanya dalam proses itu pula orang Kristen dapat menikmati anugerah Allah seutuhnya.",
            "link" => "https://misi.sabda.org/hidup_kristen",
          ),
          array(
            "title" => "Kesaksian Misi",
            "desc" => "Ladang misi tidak hanya menyajikan kehidupan yang nyaman-nyaman  saja, adakalanya malah justru jauh dari kenyamanan. Tapi kasih karunia Allah selalu menyertai anak-anak-Nya dan Ia berjanji akan selalu menyertai kita sampai akhir zaman. Kiranya kesaksian-kesaksian di bawah ini dapat menguatkan kita.",
            "link" => "https://misi.sabda.org/kesaksian_misi",
          ),
          array(
            "title" => "Profil Bangsa e-Misi",
            "desc" => "Bersyukur saat melihat bagaimana Allah bekerja secara luar biasa di berbagai tempat di seluruh dunia. Tuhan yang terus menggerakan orang-orang pilihannya untuk menjangkau bangsa-bangsa agar banyak terjadi pertobatan. Kiranya profil bangsa-bangsa berikut ini bisa menggerakan hati kita untuk berbelas kasihan berdoa bagi bangsa-bangsa tersebut.",
            "link" => "https://misi.sabda.org/daftar_profil_bangsa",
          ),
          array(
            "title" => "Tokoh Misi",
            "desc" => "Kita patut bersyukur karena ada orang yang bersedia meninggalkan zona kenyamanan, menyingsingkan lengan, dan bekerja keras agar firman Tuhan sampai ke ujung bumi. Lewat tokoh-tokoh misi yang kami hadirkan kepada Anda, kiranya dapat menjadi motivasi pelayanan Anda.",
            "link" => "https://misi.sabda.org/tokoh_misi",
          ),
          array(
            "title" => "Sumber-sumber Misi",
            "desc" => "Bersyukur untuk sumber situs misi yang telah dikerjakan dan mendukung dalam pelayanan Kristen. Melalui sumber-sumber misi berikut kiranya dapat menolong dalam pelayanan.",
            "link" => "https://misi.sabda.org/lembaga_misi",
          ),
          array(
            "title" => "Referensi Situs e-Misi",
            "desc" => "Referensi yang lengkap dan akurat bisa digunakan untuk menggali lebih dalam tentang penginjilan.  Kiranya melalui referensi ini bisa menolong untuk memahami pelayanan misi.",
            "link" => "https://misi.sabda.org/referensi_misi",
          ),
          array(
            "title" => "Publikasi Open Doors",
            "desc" => "Buletin Doa Open Doors (versi elektronik) merupakan publikasi yang hadir sebagai hasil kerja sama antara Yayasan Lembaga SABDA (YLSA) dan Yayasan Obor Damai Indonesia. Adapun buletin ini didistribusikan dengan menggunakan sistem Internet -- Komputer Alkitab Network (I-KAN). Melalui publikasi ini Tuhan memampukan Gereja-Nya untuk pergi ke seluruh dunia dan memberitakan Injil.",
            "link" => "https://sabda.org/publikasi/opendoors",
          ),
          array(
            "title" => "Publikasi 40 Hari Doa",
            "desc" => "Program doa bersama 40 Hari Doa Bangsa-bangsa ini akan berlangsung selama bulan Ramadhan. Selama waktu tersebut kami akan mengirimkan pokok-pokok doa versi email yang diambil dari buku panduan doa 40 Hari Doa Bangsa-bangsa untuk menjadi bahan doa kita bersama. jadilah \"penggerak doa\" di tempat dimana Anda berada, baik di gereja, persekutuan doa, tempat bekerja, dll. Dengan demikian kita akan siap melihat Tuhan berkarya di antara umat-Nya.",
            "link" => "https://sabda.org/publikasi/40hari",
          ),
          // array(
          //   "title" => "Metanarasi Alkitab: Misi Allah",
          //   "desc" => "Dalam metanarasi Alkitab kita bisa menonton dan diajak terlibat dalam sebuah drama Allah yang bermisi. Misi bukanlah pekerjaan manusia, tetapi pekerjaan Allah. Alkitab menceritakan Allah yang memilih untuk menciptakan dunia dan berinisiatif untuk memperbaikinya ketika ciptaan tersebut melenceng dari skenario yang dikehendaki-Nya.",
          //   "link" => "https://live.sabda.org/article.php?title=metanarasi_alkitab_misi_allah",
          // ),
          // array(
          //   "title" => "Misi + Gereja pada Era Digital",
          //   "desc" => "Gereja yang Alkitabiah adalah gereja yang bermisi. Penggunaan teknologi dan kedewasaan dalam mengelolanya adalah modal bagi gereja untuk memobilisasi, memperlengkapi, dan mengutus para misionaris yang cakap di era digital ini.",
          //   "link" => "https://live.sabda.org/article.php?title=misi_gereja_pada_era_digital",
          // ),
          array(
            "title" => "Mission: From Cover to Cover",
            "desc" => "Misi adalah tujuan dan rencana ALLAH bagi dunia dan misi juga adalah identitas kita sebagai orang percaya. Kita diberkati untuk menjadi berkat. Dan bagian kita sebagai anak ALLAH adalah memberitakan keselamatan dari Mesias yang menderita dan bangkit bagi kita, sampai keseluruh Bumi.",
            "link" => "https://live.sabda.org/article.php?title=mission_from_cover_to_cover",
          ),
          array(
            "title" => "Firman Allah Berbicara dalam Bahasa dan Budaya",
            "desc" => "Berdasarkan Wahyu 7:9, misi Allah ada untuk seluruh suku bangsa. Semua suku harus mendengar pesan kasih Allah, karena mereka tidak hanya masuk dalam Amanat Agung, melainkan juga dalam nubuat penglihatan tentang sejumlah besar orang di ayat itu. Kita bisa berada di antara orang-orang itu jika kita mendengar Kabar Sukacita dalam bahasa yang kita mengerti dan menerima anugerah keselamatan Allah.",
            "link" => "https://live.sabda.org/article.php?title=firman_dalam_bahasa_suku",
          ),
          array(
            "title" => "Anak-Anak Memanggil",
            "desc" => "Panggilan dalam pelayanan anak-anak merupakan cara untuk kita dapat melatih anak-anak kedalam Misi Allah sejak dini. Melalui pelajaran kehidupan petrus dan paulus, dengan segala upaya kiranya kita dapat mewariskan Iman, Firman Tuhan dan Pelayanan (Misi) di dalam diri anak -anak. Seperti yang tertulis dalam Fil 3:10, meskipun ayat ini sulit untuk kita kerjakan, tetapi biarlah kiranya ayat ini menjadi pedoman di dalam kita mengerjakan pelayanan kita, melahirkan anak-anak yang kelak mau memberitakan Injil sampai ke ujung Dunia.",
            "link" => "https://live.sabda.org/article.php?title=anak_anak_memanggilku",
          ),
          // array(
          //   "title" => "Mengapa Belajar Alkitab? Alkitab Dinantikan Semua Suku Bangsa",
          //   "desc" => "Untuk membawa seluruh bangsa menjadi murid Yesus, itu berarti firman Tuhan juga harus ada dalam segata bahasa suku.",
          //   "link" => "https://live.sabda.org/article.php?title=alkitab_dinantikan_semua_bangsa",
          // ),
          array(
            "title" => "Melayankan Injil secara Kreatif kepada Anak",
            "desc" => "Anak adalah gereja masa kini, sekaligus gereja masa depan. Melayankan injil kepada anak merupakan upaya menjaga keberlangsungan gereja. Itu sebabnya panggilan utama gereja melalui  orangtua maupun komisi pelayanan anak adalah membimbing anak mengenal Tuhan Yesus dan karya penyelamatan-Nya. Agar berita terpenting tersebut dapat dipahami anak, diperlukan strategi serta media pembelajaran yang kreatif.",
            "link" => "https://live.sabda.org/article.php?title=melayankan_injil_secara_kreatif",
          ),
          array(
            "title" => "Jaringan Pelayanan",
            "desc" => "Jaringan pelayanan untuk memperlengkapi Tubuh Kristus dan pelayanan misi. Kiranya jaringan pelayanan misi ini boleh memperluas jaringan kita untuk berkolaborasi dalam pelayanan misi.",
            "link" => "https://misi.sabda.org/jaringan_pelayanan",
          ),
          array(
            "title" => "Terjemahan Alkitab",
            "desc" => "Puji Tuhan untuk adanya terjemahan Alkitab ke dalam bahasa-bahasa lokal yang dibutuhkan oleh gereja-gereja lokal. Kiranya melalui terjemahan Alkitab yang beragam ini boleh menolong memperlengkapi pelayanan misi ke daerah-daerah.",
            "link" => "https://misi.sabda.org/terjemahan_alkitab",
          ),
          array(
            "title" => "Lintas Religi",
            "desc" => "Halaman situs tidak tersedia",
            "link" => "https://misi.sabda.org/lintas_religi",
          ),
          array(
            "title" => "10 Alasan Untuk Memercayai Allah Menawarkan Hadiah Yang Sempurna",
            "desc" => "Ketika sampai pada topik tentang keberadaan Tuhan, Alkitab mengatakan bahwa ada banyak orang yang telah melihat bukti yang cukup namun mereka mendiamkan kebenaran Tuhan. Di sisi lain Tuhan mengatakan kepada mereka yang ingin mencari-Nya untuk mencari-Nya dengan kesungguhan hati.",
            "link" => "https://paskah.sabda.org/10_alasan_untuk_mempercayai_allah_menawarkan_hadiah_yang_sempurna_0",
          ),
          array(
            "title" => "Pencarian Kebenaran",
            "desc" => "Kebenaran yang sesungguhnya mampu mengubahkan hidup. Namun, masih sedikit orang untuk menemukan makna, kebenaran, dan tujuan hidup. Ingin tahu kehidupan yang diubah oleh iman baru yang ditemukan di dalam Kristus, simaklah artikel berikut",
            "link" => "https://paskah.sabda.org/pencarian_kebenaran",
          ),
          array(
            "title" => "Kristus Telah Menaklukkan Kematian",
            "desc" => "karya penebusan Kristus di atas salib diterima Allah untuk menggantikan kita. Kiranya kita dimampukan untuk menyerahkan hidup kepada Kristus dan hidup sesuai kehendak-Nya.",
            "link" => "https://paskah.sabda.org/kristus_telah_menaklukkan_kematian",
          ),
          array(
            "title" => "Mengenal Yesus Kristus",
            "desc" => "Yesus adalah pribadi yang benar-benar hidup. Untuk mengenal-Nya membutuhkan iman percaya. Kiranya melalui artikel ini kita bisa belajar dan mengenal pribadi Yesus dan sejarah kehidupan-Nya serta mengundang-Nya untuk tinggal dalam hidup kita.",
            "link" => "https://paskah.sabda.org/mengenal_yesus_kristus",
          ),
          array(
            "title" => "Manusia Tanpa Kristus adalah Terhilang",
            "desc" => "Kebutuhan manusia yang paling utama yaitu hidup dengan dilengkapi oleh Allah. Allah yang telah memberikan putra-Nya ingin supaya hidup manusia dilengkapi dengan pribadi Kristus. Karena kristus satu-satunya yang bisa melengkapi kekurangan manusia yang terhilang.",
            "link" => "https://paskah.sabda.org/manusia_tanpa_kristus_adalah_terhilang_0",
          ),
          array(
            "title" => "Loving Muslims Enough to Reach Out, Globally and Locally",
            "desc" => "Setiap umat di muka bumi membutuhkan Kabar Baik bagi kehidupan mereka. Terkhusus untuk menjangkau umat Muslim dibutuhkan usaha dan strategi dengan baik. Melalui artikel ini diharapkan bisa menolong untuk mengasihi dan mengjangkau umat Muslim sesuai dengan kebutuhan.",
            "link" => "https://www.christianitytoday.com/edstetzer/2014/september/loving-muslims-enough-to-reach-out.html",
          ),
          // array(
          //   "title" => "Ordinary’ Christians Can Reach Muslims Better than Specialists",
          //   "desc" => "Jaringan Mahabba mampu menjadi wadah untuk menjangkau orang-orang Muslim melalui orang Kristen yang biasa yang didukung oleh orang Kristen yang sudah spesialis dalam menjangkau Muslim. Dengan adanya jaringan relasional Mahabba maka ekspansi secara nasional dan internasional dapat terwujuh melalui program ataupun strategi yang sudah dilakukan.",
          //   "link" => "https://www.lausanne.org/content/lga/2017-01/ordinary-christians-can-reach-muslims-better-than-specialists",
          // ),

      );
  }


  public function getAudio()
  {
      return array(
              array(
                "title" => "Audio artikel e-Misi",
                "desc" => "Kumpulan audio bahan-bahan misi.",
                "link" => "https://misi.sabda.org/audio_artikel",
              ),
              array(
                "title" => "Kartidaya: Sahabat Bagi Indonesia",
                "desc" => "Audio mengenai pelayanan Kartidaya yang melayani masyarakat Kristen Indonesia di bidang penerjemahan Alkitab ke dalam bahasa-bahasa suku.",
                "link" => "https://static.sabda.org/live/ministryseries/Ministry_Series_20201120_Kartidaya_Sahabat_Bagi_Indonesia.mp3",
              ),
              array(
                "title" => "BPLB/OMF: Menjangkau Asia Timur dan STAM Indonesia",
                "desc" => "Audio tentang sebuah lembaga misionaris Kristen Protestan interdenominasi.",
                "link" => "https://static.sabda.org/live/ministryseries/Ministry_Series_20201112_BPLB_OMF_Menjangkau_Asia_Timur_dan_Indonesia.mp3",
              ),
              array(
                "title" => "Evangelism Explosion: Till Everyone Hears",
                "desc" => "Audio pemaparan pelayanan EE sebagai pelayanan multidenominasi, organisasi misi nonprofit yang operasinya tergantung pada kasih karunia Tuhan kita dan umat-Nya yang mendukung pelayanan ini.",
                "link" => "https://static.sabda.org/live/ministryseries/Ministry_Series_20201111_Evangelism_Explosion_Till_Everyone_Hears.mp3",
              ),
              array(
                "title" => "JPA: Bersinergi untuk Keselamatan dan Kemajuan Anak",
                "desc" => "Audio yang berisi pemaparan tentang lembaga pelayanan anak untuk melaksanakan Amanat Agung dan Kabar Baik kepada anak-anak.",
                "link" => "https://static.sabda.org/live/ministryseries/Ministry_Series_20201106_JPA_Bersinergi_untuk_Keselamatan_dan_Kemajuan_Anak.mp3",
              ),
              array(
                "title" => "Mission Talks: Anak-Anak Memanggilku!",
                "desc" => "Audio berisi panggilan dalam pelayanan anak-anak merupakan cara untuk kita dapat melatih anak-anak kedalam Misi Allah sejak dini.",
                "link" => "https://static.sabda.org/live/passionseries/Passion_Series_20200901_Anak_Anak_Memanggilku.mp3",
              ),
              array(
                "title" => "Mission Talks: Mission From Cover to Cover",
                "desc" => "Pemaparan melalui audio mengenai misi yang merupakan tujuan dan rencana Allah bagi dunia dan misi juga adalah identitas kita sebagai orang percaya. Kita diberkati untuk menjadi berkat.",
                "link" => "https://static.sabda.org/live/passionseries/Passion_Series_20200909_Mission_from_Cover_to_Cover.mp3",
              ),
              array(
                "title" => "Pelayanan Anak: Melayankan Injil secara Kreatif",
                "desc" => "Melayankan injil kepada anak merupakan upaya menjaga keberlangsungan gereja. Itu sebabnya panggilan utama gereja melalui orangtua maupun komisi pelayanan anak adalah membimbing anak mengenal Tuhan Yesus dan karya penyelamatan-Nya.",
                "link" => "https://static.sabda.org/live/funtalk/Fun_Talks_20200715_Melayankan_Injil_secara_Kreatif.mp3",
              ),
              // array(
              //   "title" => "Mengapa Belajar Alkitab? Firman Allah Berbicara dalam Bahasa dan Budaya Lokal",
              //   "desc" => "Misi Allah ada untuk seluruh suku bangsa. Semua suku harus mendengar pesan kasih Allah karena mereka tidak hanya masuk dalam Amanat Agung, melainkan dalam nubuat penglihatan tentang sejumlah besar orang. Kita bisa berada di antara orang-orang itu jika kita mendengar Kabar Sukacita dalam bahasa yang kita mengerti dan menerima anugerah keselamatan Allah.",
              //   "link" => "https://static.sabda.org/live/bibletalk/Bible_Talks_20200826_Firman_Allah_Berbicara_dalam_Bahasa_dan_Budaya_Lokal.mp3",
              // ),
              // array(
              //   "title" => "Mengapa Belajar Alkitab? Alkitab Dinantikan Semua Suku Bangsa",
              //   "desc" => "Alkitab dinantikan semua suku bangsa. Untuk membawa seluruh bangsa menjadi murid Yesus, itu berarti firman Tuhan juga harus ada dalam segata bahasa suku.",
              //   "link" => "https://static.sabda.org/live/bibletalk/Bible_Talks_20200812_Alkitab_Dinantikan_Semua_Suku_Bangsa.mp3",
              // ),
              // array(
              //   "title" => "Misi + Gereja pada Era Digital",
              //   "desc" => "Gereja yang Alkitabiah adalah gereja yang bermisi. Penggunaan teknologi dan kedewasaan dalam mengelolanya adalah modal bagi gereja untuk memobilisasi, memperlengkapi, dan mengutus para misionaris yang cakap di era digital ini.",
              //   "link" => "https://static.sabda.org/live/visiontalk/Vision_Talks_20200626_Misi_+_Gereja_Pada_Era_Digital.mp3",
              // ),
              array(
                "title" => "Audio Program Kebenaran Abadi",
                "desc" => "Program \"Kebenaran Abadi\" (dalam bahasa Indonesia) adalah bagian dari program pengajaran Alkitab \"Through The Bible\". Seri aslinya ditulis oleh Dr. J. VernonMcGee dan telah diterjemahkan dan disesuaikan ke dalam lebih 100 bahasa maupun dialek.",
                "link" => "https://sabda.id/listen.php",
              ),
              array(
                "title" => "Audio Global Recordings Dalam Bahasa Suku Indonesia",
                "desc" => " ",
                "link" => "https://globalrecordings.net/id/country/ID",
              ),
              // array(
              //   "title" => "Metanarasi Alkitab: Misi Allah",
              //   "desc" => "Pemaparan terkait dimulainya misi Allah dalam Alkitab.",
              //   "link" => "https://static.sabda.org/live/passionseries/Passion_Series_20200916_Metanarasi_Alkitab_Misi_Allah.mp3",
              // ),
              array(
                "title" => "Reaching Muslim Neighbors with the Gospel",
                "desc" => "Kumpulan bahan audio untuk pelayanan penjangkauan bagi kaum muslim supaya mengenal Injil.",
                "link" => "https://www.namb.net/podcasts/evangelism-with-johnny-hunt/reaching-muslim-neighbors-with-the-gospel/",
              ),

      );
  }

  public function getVideo()
  {
      return array(
                array(
                  "title" => "Video Misi",
                  "desc" => "Kumpulan video seputar pelayanan misi dari berbagai yayasan misi dan penjangkauan.",
                  "link" => "https://misi.sabda.org/bahan-multimedia-misi",
                ),
                array(
                  "title" => "Kartidaya: Sahabat Bagi Indonesia",
                  "desc" => "Kartidaya melayani masyarakat Kristen Indonesia di bidang penerjemahan Alkitab ke dalam bahasa-bahasa suku.",
                  "img" => "https://i.ytimg.com/vi/nYwWYRoJj-A/mqdefault.jpg",
                  "link" => "https://static.sabda.org/live/ministryseries/Ministry_Series_20201120_Kartidaya_Sahabat_Bagi_Indonesia.mp4",
                ),
                array(
                  "title" => "BPLB/OMF: Menjangkau Asia Timur dan STAM Indonesia",
                  "desc" => "Sebuah lembaga misionaris Kristen Protestan interdenominasi.",
                  "img" => "https://i.ytimg.com/vi/c1XPsbd3DTo/mqdefault.jpg",
                  "link" => "https://static.sabda.org/live/ministryseries/Ministry_Series_20201112_BPLB_OMF_Menjangkau_Asia_Timur_dan_Indonesia.mp4",
                ),
                array(
                  "title" => "Evangelism Explosion: Till Everyone Hears",
                  "desc" => "EE adalah pelayanan multidenominasi, organisasi misi nonprofit yang operasinya tergantung pada kasih karunia Tuhan kita dan umat-Nya yang mendukung pelayanan ini.",
                  "img" => "https://i.ytimg.com/vi/hzjL3vgIHVc/mqdefault.jpg",
                  "link" => "https://static.sabda.org/live/ministryseries/Ministry_Series_20201111_Evangelism_Explosion_Till_Everyone_Hears.mp4",
                ),
                array(
                  "title" => "JPA: Bersinergi untuk Keselamatan dan Kemajuan Anak",
                  "desc" => "Lembaga pelayanan anak untuk melaksanakan Amanat Agung dan Kabar Baik kepada anak-anak.",
                  "img" => "https://i.ytimg.com/vi/64e7wAzajUo/mqdefault.jpg",
                  "link" => "https://static.sabda.org/live/ministryseries/Ministry_Series_20201106_JPA_Bersinergi_untuk_Keselamatan_dan_Kemajuan_Anak.mp4",
                ),
                array(
                  "title" => "Mission Talks: Anak-Anak Memanggilku!",
                  "desc" => "Panggilan dalam pelayanan anak-anak merupakan cara untuk kita dapat melatih anak-anak kedalam Misi Allah sejak dini.",
                  "img" => "https://i.ytimg.com/vi/1sSFocriYwg/mqdefault.jpg",
                  "link" => "https://static.sabda.org/live/passionseries/Passion_Series_20200901_Anak_Anak_Memanggilku.mp4",
                ),
                array(
                  "title" => "Mission Talks: Mission From Cover to Cover",
                  "desc" => "Misi adalah tujuan dan rencana Allah bagi dunia dan misi juga adalah identitas kita sebagai orang percaya. Kita diberkati untuk menjadi berkat.",
                  "img" => "https://i.ytimg.com/vi/xOwcPs-zBYc/mqdefault.jpg",
                  "link" => "https://static.sabda.org/live/passionseries/Passion_Series_20200909_Mission_from_Cover_to_Cover.mp4",
                ),
                array(
                  "title" => "Pelayanan Anak: Melayankan Injil secara Kreatif",
                  "desc" => "Melayankan injil kepada anak merupakan upaya menjaga keberlangsungan gereja. Itu sebabnya panggilan utama gereja melalui orangtua maupun komisi pelayanan anak adalah membimbing anak mengenal Tuhan Yesus dan karya penyelamatan-Nya.",
                  "img" => "https://i.ytimg.com/vi/drvPHfyBT-s/mqdefault.jpg",
                  "link" => "https://static.sabda.org/live/funtalk/Fun_Talks_20200715_Melayankan_Injil_secara_Kreatif.mp4",
                ),
                // array(
                //   "title" => "Mengapa Belajar Alkitab? Firman Allah Berbicara dalam Bahasa dan Budaya Lokal",
                //   "desc" => "Misi Allah ada untuk seluruh suku bangsa. Semua suku harus mendengar pesan kasih Allah karena mereka tidak hanya masuk dalam Amanat Agung, melainkan dalam nubuat penglihatan tentang sejumlah besar orang. Kita bisa berada di antara orang-orang itu jika kita mendengar Kabar Sukacita dalam bahasa yang kita mengerti dan menerima anugerah keselamatan Allah.",
                //   "img" => "https://i.ytimg.com/vi/2P9reEFUzkE/mqdefault.jpg",
                //   "link" => "https://static.sabda.org/live/bibletalk/Bible_Talks_20200826_Firman_Allah_Berbicara_dalam_Bahasa_dan_Budaya_Lokal.mp4",
                // ),
                // array(
                //   "title" => "Mengapa Belajar Alkitab? Alkitab Dinantikan Semua Suku Bangsa",
                //   "desc" => "Alkitab dinantikan semua suku bangsa. Untuk membawa seluruh bangsa menjadi murid Yesus, itu berarti firman Tuhan juga harus ada dalam segata bahasa suku.",
                //   "img" => "https://i.ytimg.com/vi/hIrnF4Unz2Y/mqdefault.jpg",
                //   "link" => "https://static.sabda.org/live/bibletalk/Bible_Talks_20200812_Alkitab_Dinantikan_Semua_Suku_Bangsa.mp4",
                // ),
                // array(
                //   "title" => "Misi + Gereja pada Era Digital",
                //   "desc" => "Gereja yang Alkitabiah adalah gereja yang bermisi. Penggunaan teknologi dan kedewasaan dalam mengelolanya adalah modal bagi gereja untuk memobilisasi, memperlengkapi, dan mengutus para misionaris yang cakap di era digital ini.",
                //   "img" => "https://i.ytimg.com/vi/W0be_BwDxLs/mqdefault.jpg",
                //   "link" => "https://static.sabda.org/live/visiontalk/Vision_Talks_20200626_Misi_+_Gereja_Pada_Era_Digital.mp4",
                // ),
                // array(
                //   "title" => "Metanarasi Alkitab: Misi Allah",
                //   "desc" => "Pemaparan terkait dimulainya misi Allah dalam Alkitab.",
                //   "img" => "https://i.ytimg.com/vi/CIXbZZ1e2Go/mqdefault.jpg",
                //   "link" => "https://static.sabda.org/live/passionseries/Passion_Series_20200916_Metanarasi_Alkitab_Misi_Allah.mp4",
                // ),
                array(
                  "title" => "Film Lumo",
                  "desc" => "Terjemahan visual terhadap keempat kitab Injil, yang dikembangkan untuk benar-benar melibatkan orang-orang dengan Alkitab!",
                  "img" => "https://lumo.sabda.org/img/header01.jpg",
                  "link" => "https://lumo.sabda.org/",
                ),
                array(
                  "title" => "Film Raja Kemuliaan",
                  "desc" => "Judul dari buku bergambar dan film Raja Kemuliaan, memiliki 70 adegan, masing-masing dengan satu halaman cerita.",
                  "img" => "https://raja.sabda.org/img/header/kog_1.jpg",
                  "link" => "raja.sabda.org",
                ),
                array(
                  "title" => "Film Tetelestai",
                  "desc" => "Proyek Tetelestai adalah seri pengajaran Alkitab yang dinamis, terdiri dari 11 episode yang menyajikan narasi-narasi utama Alkitab tentang Allah. Setiap video membawa kita menelusuri kisah abadi penebusan dalam firman Tuhan, mulai dari penciptaan, kejatuhan, pengurbanan, pengurbanan sempurnan, Kristus, lalu harapan.",
                  "img" => "https://tetelestai.sabda.org/img/slider/parallax/img-1.png",
                  "link" => "https://tetelestai.sabda.org/",
                ),
                array(
                  "title" => "Animasi DongHaeng",
                  "desc" => "Kumpulan animasi bergerak sederhana yang sarat makna dan mengangkat tema-tema penting dalam Alkitab yang membantu kita untuk memahami lebih dalam hati Tuhan dan kasih-Nya yang tak berkesudahan bagi kita.",
                  "img" => "https://media.sabda.org/kios/DVD_Library-SABDA-Anak-1.3/Animasi_dan_Klip/Donghaeng-Indonesia_Klip/thumbs/iman.jpg",
                  "link" => "https://sabda.id/watch.php?resource=donghaeng",
                ),
                array(
                  "title" => "Film Matius",
                  "desc" => "Film yang menceritakan setiap detail kisah Injil Matius untuk menggambarkan kehidupan dan pelayanan Yesus Kristus secara utuh dan menyeluruh.",
                  "img" => "https://media.sabda.org/video_alkitab/film/matius/pericope/thumbs/Matius_04_12-17__Yesus_tampil_di_Galilea.jpg",
                  "link" => "https://sabda.id/watch.php?resource=matius",
                ),
                array(
                  "title" => "Film Lukas",
                  "desc" => "Film yang menceritakan kisah Injil Lukas secara detail dimulai dari pemberitaan kelahiran Yesus Kristus hingga peristiwa kenaikan-Nya ke sorga.",
                  "img" => "https://media.sabda.org/video_alkitab/film/lukas/pericope/thumbs/Lukas_01_01-04__Pendahuluan.jpg",
                  "link" => "https://sabda.id/watch.php?resource=lukas",
                ),
                array(
                  "title" => "Film Yohanes",
                  "desc" => "Film yang mengisahkan secara detail tentang kisah Injil Yohanes di mana Yohanes sebagai murid Yesus sekaligus saksi mata kehidupan Yesus Kristus dan segala pelayanan-Nya semasa di bumi hingga peristiwa kebangkitan-Nya.",
                  "img" => "https://media.sabda.org/video_alkitab/film/yohanes/pericope/thumbs/Yohanes_06_25-70__Roti_kehidupan__Perkataan_kehidupan_kekal.jpg",
                  "link" => "https://sabda.id/watch.php?resource=yohanes",
                ),
                array(
                  "title" => "Film Kisah Para Rasul",
                  "desc" => "Film yang mengisahkan kejadian-kejadian penting dalam Kitab Kisah Para Rasul di mana penyebarluasan kabar baik yang dibawa Yesus gencar dilakukan oleh para murid dan pengikut-Nya.",
                  "img" => "https://media.sabda.org/video_alkitab/film/kisah/chapter/thumbs/kisah05.jpg",
                  "link" => "https://sabda.id/watch.php?resource=kisahpr",
                ),
                array(
                  "title" => "The Bible Project",
                  "desc" => "Video dari The Bible Project terdiri dari video animasi yang menarasikan 66 kitab dan tema-tema khusus dalam Alkitab.",
                  "img" => "https://media.sabda.org/video_alkitab/tbp/id/Belajar_Kunci_Tematik_Alkitab/thumbs/Roh_Kudus.jpg",
                  "link" => "https://sabda.id/watch.php?resource=tbp",
                ),
                array(
                  "title" => "Alkitab Video Bergambar",
                  "desc" => "Kisah Alkitab dari Kejadian sampai Wahyu dalam format video bergambar.",
                  "img" => "https://media.sabda.org/video_alkitab/gnp/01_kejadian/thumbs/01_Kejadian_011.jpg",
                  "link" => "https://sabda.id/watch.php?resource=gnp",
                ),
                array(
                  "title" => "Video Kisah Kasih Abadi",
                  "desc" => "Video kisah perjalanan kehidupan Yesus.",
                  "img" => "https://komik.app/images/carousel/bg-intro-3.jpg",
                  "link" => "https://komik.app/kingstone/video/animasi/",
                ),
                array(
                  "title" => "Video I AM Channel",
                  "desc" => " ",
                  "img" => "",
                  "link" => "https://video.iamchannel.org/",
                ),

      );
  }

  public function getAplikasi()
  {
      return array(
              array(
                "title" => "APP BAKAT",
                "desc" => "Aplikasi BaKat merupakan sebuah katalog berisi koleksi Alkitab dan berbagai jenis bahan media dalam bahasa-bahasa suku di Indonesia.",
                "img" => "https://android.sabda.org/img/logo-bakat.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.bakat",
              ),
              array(
                "title" => "Yesus -- Hidup-Nya",
                "desc" => "Aplikasi Yesus - Hidup-Nya berisi kutipan teks Alkitab Yang Terbuka mengenai kelahiran Yesus sampai setelah kenaikan-Nya ke surga. Aplikasi ini akan membawa setiap pembacanya untuk mengenal Pribadi yang sangat luar biasa ini berdasarkan kebenaran sejati, yaitu Alkitab.",
                "img" => "https://android.sabda.org/img/logo-yesus.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.hidupyesus",
              ),
              array(
                "title" => "Cerita Injil Audio",
                "desc" => "Aplikasi Cerita Injil Audio menyediakan cerita-cerita Alkitab bergambar yang dilengkapi dengan ratusan audio dan ilustrasi, sehingga memudahkan kita mengenal firman Allah dan siapakah Tuhan Yesus Kristus.",
                "img" => "https://android.sabda.org/img/logo-ceritainjil.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.cerita.injil",
              ),
              // array(
              //   "title" => "Alkitab SABDA",
              //   "desc" => "Aplikasi Alkitab SABDA adalah aplikasi Alkitab multifungsi, multiversi, bebas iklan dan gratis. Aplikasi ini memiliki banyak fitur pendukung untuk menolong kita mengakses firman Tuhan.",
              //   "img" => "https://android.sabda.org/img/logo-alkitab.png",
              //   "link" => "https://play.google.com/store/apps/details?id=org.sabda.alkitab",
              // ),
              // array(
              //   "title" => "Kamus Alkitab",
              //   "desc" => "Kamus Alkitab LENGKAP yang memuat penjelasan SETIAP kata/istilah-istilah yang ada dalam Alkitab. Dengan aplikasi ini, pemahaman Anda mengenai kata, makna, dan fakta-fakta dalam Alkitab akan makin TERBUKA.",
              //   "img" => "https://android.sabda.org/img/logo-kamusalkitab.png",
              //   "link" => "https://play.google.com/store/apps/details?id=org.sabda.kamus",
              // ),
              // array(
              //   "title" => "Tafsiran Alkitab",
              //   "desc" => "Aplikasi ini menawarkan pilihan tafsiran kepada para pengguna supaya bisa membandingkan pemahaman ayat-ayat Alkitab dari sudut pandang para ahli tafsir Alkitab.",
              //   "img" => "https://android.sabda.org/img/logo-tafsiran.png",
              //   "link" => "https://play.google.com/store/apps/details?id=org.sabda.tafsiran",
              // ),
              // array(
              //   "title" => "Alkitab Pedia",
              //   "desc" => "Dengan AlkiPEDIA, pengguna dapat melakukan analisa setiap kitab dalam Alkitab dengan informasi fakta, latar belakang, garis besar, tujuan, tema-tema kunci, survei, dan ciri khas setiap kitab.",
              //   "img" => "https://android.sabda.org/img/logo-alkipedia.png",
              //   "link" => "https://play.google.com/store/apps/details?id=org.sabda.pedia",
              // ),
              // array(
              //   "title" => "Cerita Alkitab Terbuka",
              //   "desc" => "Cerita Alkitab Terbuka adalah aplikasi yang menampilkan 50 cerita Alkitab dari Perjanjian Lama (x21) dan Perjanjian Baru (x29) yang disusun secara kronologis.",
              //   "img" => "https://android.sabda.org/img/logo-cerita.png",
              //   "link" => "https://play.google.com/store/apps/details?id=org.sabda.cerita",
              // ),
              array(
                "title" => "Komik Kingstone",
                "desc" => "Komik Kingstone merupakan seri Kisah Kasih Abadi yang menyajikan presentasi komik Alkitab paling lengkap dalam sejarah: 66 kitab (Kejadian-Wahyu), 44 artist, dalam 72 buku dengan 2.000+ halaman dan 10.000 panels (full colour, bergaya Marvel komik).",
                "img" => "https://android.sabda.org/img/logo-komiksabda.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.komik",
              ),
              // array(
              //   "title" => "Komik Alkitab Bergambar",
              //   "desc" => "Aplikasi Komik Alkitab Bergambar sangat cocok untuk mempelajari cerita-cerita Alkitab karena telah diurutkan secara sistematis dari Kejadian sampai Kisah Para Rasul, yang terdiri dari empat seri dari Perjanjian Lama dan dua seri dari Perjanjian Baru dengan total 800+ halaman.",
              //   "img" => "https://android.sabda.org/img/logo-komikalkitab.png",
              //   "link" => "https://play.google.com/store/apps/details?id=org.sabda.komik.alkitab",
              // ),
              array(
                "title" => "Komik Kitab Suci",
                "desc" => "Aplikasi ini menyajikan seri cerita-cerita Alkitab Perjanjian Lama dan Perjanjian Baru dalam gaya gambar yang disukai anak-anak. Melalui cerita-cerita Alkitab ini kita akan dituntun untuk mengenal kebenaran Alkitab dengan cara yang sederhana dan menyenangkan, sesuai perkembangan zaman.",
                "img" => "https://android.sabda.org/img/logo-komikkitabsuci.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.komik.kitabsuci",
              ),
              array(
                "title" => "Komik Yesus Hidup",
                "desc" => "Komik \"Dia Hidup di Antara Kita\" menampilkan ilustrasi menakjubkan disertai dengan dialog. Ilustrasi ini akan menjamah hati, mengubah hidup, dan mengubah kehidupan pembacanya di masa depan.",
                "img" => "https://android.sabda.org/img/logo-komikyesus.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.komik.yesus",
              ),
              array(
                "title" => "APP \"Doa seDunia\"",
                "desc" => "APP \"Doa seDunia\" sangat tepat untuk menjadi panduan doa bagi Anda yang rindu memengaruhi bangsa-bangsa bagi Kristus melalui doa! Di dalamnya terdapat informasi dan pokok doa dari 215 negara-negara, bangsa-bangsa, dan kota-kota di dunia, yang tersedia dalam 328 bagian.",
                "img" => "https://android.sabda.org/img/logo-doasedunia.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.operationworld",
              ),
              array(
                "title" => "HE Cares",
                "desc" => "App Konseling (HE Cares) adalah aplikasi konseling alkitabiah yang berbasis kebenaran firman Allah untuk menolong Anda mencari jawaban atas berbagai masalah dan pertanyaan dalam hidup.",
                "img" => "https://android.sabda.org/img/logo-hecares.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.konseling",
              ),
              array(
                "title" => "e-Renungan PSM",
                "desc" => "Aplikasi yang setiap hari menyediakan tiga bacaan 'renungan harian' Kristen, Pagi, Siang, dan Malam, tanpa internet, supaya setiap hari Anda diisi dengan firman Tuhan dan kebenaran-Nya!",
                "img" => "https://android.sabda.org/img/logo-psm.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.renunganpsm",
              ),
              array(
                "title" => "Renungan e-SH",
                "desc" => "Aplikasi ini menyediakan 6000+ bahan saat teduh e-SH yang telah disusun berdasarkan kitab-kitab dalam Alkitab (Kejadian - Wahyu). Keistimewaan renungan e-SH adalah pada kesetiaannya membahas teks Alkitab secara eksposisi, sehingga pengguna dapat belajar firman Tuhan secara lebih mendalam.",
                "img" => "https://android.sabda.org/img/logo-santapan.png",
                "link" => "https://play.google.com/store/apps/details?id=org.sabda.santapan.harian",
              ),
      );
  }


  public function getGrafis()
  {
      return array(
              array(
                "title" => "Infografik 5 Motivasi Penginjilan",
                "img" => "",
                "link" => "https://id.pinterest.com/pin/848647123522517005",
              ),
              array(
                "title" => "Infografik Berdoa Bagi Misionaris",
                "img" => "http://static.sabda.org/suarasabda/20-06_1_-_berdoa_bagi_misionaris.jpg",
                "link" => "https://id.pinterest.com/pin/848647123521153604",
              ),
              array(
                "title" => "Infografik Amanat Agung: Perintah dan Strategi Pemuridan",
                "img" => "",
                "link" => "https://id.pinterest.com/pin/848647123511164193",
              ),
              array(
                "title" => "Infografik Watchman Nee",
                "img" => "http://static.sabda.org/suarasabda/20-06_1_-_watchman_nee.jpg",
                "link" => "https://id.pinterest.com/pin/848647123523392914",
              ),
              array(
                "title" => "Infografik 5 Cara Orang Kristen untuk Menunjukkan Empati",
                "img" => "",
                "link" => "https://id.pinterest.com/pin/848647123524597014",
              ),
              array(
                "title" => "Infografik Billy Graham",
                "img" => "http://static.sabda.org/suarasabda/21-01_2_-_billy_graham.jpg",
                "link" => "https://pin.it/1aPa9Rq",
              ),
      );
  }


  public function getRenungan()
  {
      return array(
              array(
                "title" => "Renungan e-Misi",
                "desc" => "Kumpulan renungan bertema misi untuk memperlengkapi dan meneguhkan panggilan hidup orang percaya dalam bermisi.",
                "link" => "https://misi.sabda.org/renungan_misi",
              ),
              array(
                "title" => "Arsip publikasi e-SH",
                "desc" => "Bahan saat teduh dari Scripture Union Indonesia, tersusun secara sistematis dan terstruktur.",
                "link" => "https://sabda.org/publikasi/e-sh/arsip",
              ),
              array(
                "title" => "Arsip Publikasi e-RH",
                "desc" => "Bahan saat teduh dari Yayasan Gloria.",
                "link" => "https://sabda.org/publikasi/e-rh/arsip",
              ),
      );
  }


  public function getEbook()
  {
      return array(
              array(
                "title" => "Buku Online Misi",
                "desc" => "Kumpulan e-book untuk memperlengkapi dan meneguhkan orang percaya sebagai pekerja misi.",
                "link" => "https://misi.sabda.org/buku_online_misi",
              ),
              array(
                "title" => "10 Alasan untuk Percaya",
                "desc" => "Buku yang berisi 10 alasan untuk percaya pada Alkitab.",
                "link" => "https://download.sabda.org/sabdanet/modules/buku/indonesia/alasan.exe",
              ),
              array(
                "title" => "Doakanlah Asia",
                "desc" => "",
                "link" => "https://download.sabda.org/sabdanet/modules/buku/indonesia/doaasia.exe",
              ),
      );
  }


  public function getSitus()
  {
      return array(
              array(
                "title" => "Situs e-Misi",
                "desc" => "Sumber informasi dan referensi terlengkap, tentang misi baik di Indonesia maupun di seluruh dunia.",
                "link" => "https://misi.sabda.org/",
              ),
              array(
                "title" => "Situs BaKat",
                "desc" => "Situs Katalog berbagai jenis media Kristen dalam bahasa Indonesia dan bahasa suku.",
                "link" => "https://bakat.sabda.org",
              ),
              array(
                "title" => "Situs Bible.is",
                "desc" => "Situs ini memberikan akses kepada orang-orang untuk bisa mengakses Injil dalam bahasa dan format yang mereka mengerti.",
                "link" => "https://www.faithcomesbyhearing.com/audio-bible-resources/bible-is",
              ),
              array(
                "title" => "BaDeNo",
                "desc" => "Situs yang menyediakan rencana baca Alkitab setahun.",
                "link" => "https://sabda.id/badeno/",
              ),
              array(
                "title" => "Joshua Project",
                "desc" => "Situs yang menyediakan bahan-bahan seputar suku-suku yang perlu didoakan dan dilayani.",
                "link" => "https://joshuaproject.net/",
              ),
              array(
                "title" => "Situs Christian Counseling Center Indonesia",
                "desc" => "Lembaga pelayanan virtual yang terpanggil untuk pengembangan pelayanan konseling Kristen di Indonesia.",
                "link" => "https://c3i.sabda.org/",
              ),
              array(
                "title" => "Situs e-Doa",
                "desc" => "Situs yang berisi bahan-bahan seputar doa, pokok-pokok doa untuk mengajak Anda terlibat dalam berdoa.",
                "link" => "http://doa.sabda.org/",
              ),
              array(
                "title" => "Situs Misi.co",
                "desc" => "Situs penyedia informasi bahan seputar misi terbesar di Indonesia.",
                "link" => "https://misi.co/",
              ),
              array(
                "title" => "Situs Alkitab Mobile",
                "desc" => " ",
                "link" => "https://alkitab.mobi/",
              ),
              array(
                "title" => "Situs Audio Alkitab",
                "desc" => "Situs yang menyediakan audio-audio Alkitab dalam berbagai bahasa suku.",
                "link" => "https://audio.sabda.org/",
              ),
              array(
                "title" => "I AM Channel",
                "desc" => "Situs yang menyediakan bahan-bahan untuk pelayanan penjangkauan dan penginjilan.",
                "link" => "https://iamchannel.org/",
              ),
              array(
                "title" => "Pijar TV",
                "desc" => "Stasiun televisi lokal Indonesia yang menayangkan konten-konten Kristiani secara multi-genre.",
                "link" => "https://pijar.tv/",
              ),
              array(
                "title" => "CBN",
                "desc" => " ",
                "link" => "http://www.cbn.or.id/",
              ),
              array(
                "title" => "Mahabba",
                "desc" => " ",
                "link" => "https://www.mahabbanetwork.com/",
              ),
              array(
                "title" => "Partners International",
                "desc" => " ",
                "link" => "https://www.partnersintl.org/",
              ),
              array(
                "title" => "Murid21",
                "desc" => " ",
                "link" => "https://murid21.org/",
              ),
      );
  }


  public function getMedsos()
  {
      return array(
              array(
                "title" => "I AM Channel",
                "desc" => "",
                "ig" => "https://www.instagram.com/iamchannel_org",
                "fb" => "https://www.facebook.com/IAMChannel.org/",
              ),
              array(
                "title" => "Pijar TV",
                "desc" => "",
                "ig" => "https://www.instagram.com/pijartv",
                "fb" => "https://www.facebook.com/pijartv/",
              ),
              array(
                "title" => "Apologetika Indonesia",
                "desc" => "",
                "ig" => "https://www.instagram.com/apologetikaindonesia",
                "fb" => "https://www.facebook.com/apologetikaindonesia/",
              ),
              array(
                "title" => "YesHEis Indonesia",
                "desc" => "",
                "ig" => "https://www.instagram.com/yesheisindo",
                "fb" => "https://www.instagram.com/yesheisindo",
              ),
      );
  }


  public function getPdf()
  {
      return array(
              array(
                "title" => "PDF Bahan Misi",
                "desc" => "",
                "link" => "https://misi.sabda.org/download",
              ),
      );
  }

}
