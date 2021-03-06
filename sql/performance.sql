-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-08 22:09:25
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `happyticket`
--

-- --------------------------------------------------------

--
-- 資料表結構 `performance`
--

CREATE TABLE `performance` (
  `pNo` int(10) NOT NULL,
  `pName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pCategory` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pDate` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pTime` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pPrice` int(25) NOT NULL,
  `pLocation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pDescription` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pPhoto` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pStart_month` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pStart_day` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `performance`
--

INSERT INTO `performance` (`pNo`, `pName`, `pCategory`, `pDate`, `pTime`, `pPrice`, `pLocation`, `pDescription`, `pPhoto`, `pStart_month`, `pStart_day`) VALUES
(1, '挑戰—安藤忠雄展 TADAO ANDO：ENDEAVORS', '展覽', '2022/6/3~2022/9/13', '週一至週日', 390, '松山文創園區一號倉庫', '《挑戰—安藤忠雄展》 全球巡展最終站<br>\r\n\r\n忠泰美術館邀請日本建築巨擘 來臺展出 集半世紀的心血大成<p>\r\n\r\n<br>\r\n\r\n日本建築師安藤忠雄（Tadao Ando）是當代最具影響力的建築大師之一。非建築科班出身的安藤忠雄，其生平充滿傳奇性，<br>\r\n曾當過職業拳手，在21歲時踏上7年的自學之旅，足跡遍及歐美遠至非洲，透過不斷的旅行、自學，<br>\r\n開創了一條令人刮目相看的建築道路，在1995年獲得號稱建築界諾貝爾獎的—─普立茲克建築獎，成為舉世聞名的當代建築大師。<br>\r\n<br>\r\n今夏，由忠泰美術館聯手安藤忠雄建築展實行委員會共同主辦，並邀請龍國英旅日建築師擔任策展顧問，引進《挑戰—安藤忠雄展》，<br>\r\n期待透過本展引領臺灣的觀眾一同見證這位建築大師一生中迎接各項挑戰的精彩歷程。展覽將透過自學時期的旅行速寫、<br>\r\n捕捉靈光乍現的設計手稿、創意凝聚的建築模型、留下永恆瞬間的眾多影片以及經典建築空間再現，<br>\r\n邀請觀眾親炙這位當代建築大師的創作理念及其對人生永不止息的挑戰。<br>\r\n\r\n<br>\r\n\r\n展覽亮點<br>\r\n<br>\r\n★ 4大主題，安藤忠雄人生挑戰之旅<br>\r\n<br>\r\n★ 300件展品，半世紀的經典作品集結<br>\r\n<br>\r\n★ 1:1 等比例復刻，經典代表作「光之教堂」原尺寸重現<br>\r\n<br>', 'exhibition_1.jpg', 'June', '25'),
(2, '波隆那插畫x國際無字繪本雙聯展', '展覽', '2022/6/21~2022/9/18', '週一至週日', 290, '華山1914文創園區 東2A、2B館', '徜徉異想世界！2022今年暑假最療癒的插畫藝術展！<br>\r\n親子共學 X 多感體驗 <br>\r\n<br>\r\n主視覺<br>\r\n全球來自24個國家、85名插畫家、378件得獎作品！<br>\r\n波隆那插畫奬自1967 年創辦，每年吸引全世界數千位插畫家參加，被譽為「插畫界奧斯卡奬」，入選作品在全球巡迴展出！<br>\r\n插畫、繪本，以圖敘事，是所有藝術的起源和元素，閱讀插畫、繪本，激發視覺、聽覺和思考，增進藝文涵養及啟發創作能力！<br>\r\n看插畫，讓夢想展翅高飛！<br>\r\n讀繪本，以童趣療癒心靈！<br>', 'exhibition_2.jpg', 'June', '21'),
(3, '吉卜力動畫大師—高畑勲展', '展覽', '2022/06/18 ~ 2022/09/25', '週一至週日', 299, '臺北流行音樂中心 文化館二樓 特展廳', '高畑勲，對於日本的動畫發展具有極重要地位的動畫大師；1985年與宮崎駿、鈴木敏夫共同創辦了「吉卜力工作室」，<br>\r\n自此牽動日本動畫半世紀的發展，並一舉躍進國際舞台。<br>\r\n<br>\r\n這位日本動畫巨匠於2018年4月5日因肺癌病逝，令許多動畫迷們感到震驚與不捨。<br>\r\n<br>\r\n這次展覽是由東京國立近代美術館和吉卜力工作室共同策劃，展件高達2,000件，<br>\r\n自2019年開始於日本巡迴展出，完整呈現高畑勲導演對日本動畫的影響力及與吉卜力工作室密不可分的關係；<br>\r\n從生平介紹到創作起源、故事靈感、分鏡手稿及影像，逐一透析大師的內心，了解他對作品的執著與堅持，<br>\r\n讓日本的動畫樣貌進化並發揮影響力，一覽這位天才導演留給我們最後的禮物。<br>\r\n<br>', 'exhibition_3.jpg', 'June', '18'),
(4, '普立茲新聞攝影獎80週年展', '展覽', '2022/06/23 ~ 2022/09/25', '週一至週日', 280, '華山1914文化創意產業園區 中4B館', '<h4>普立茲獎攝影師們尋求和紀錄這些關鍵時刻的目的是什麼？</h4><br>\r\n<h4>什麼人會在街頭來回尋覓隱藏在陋巷的毒窟？</h4><br>\r\n<h4>什麼人會傾聽政客們高談闊論好幾個小時只為了拍下一張照片？</h4><br>\r\n<h4>什麼人會冒著生命危險帶著相機前進戰亂為世界見證危險時刻？</h4><br>\r\n<h2>橫跨80年</h2><br>\r\n<h2>136幀得獎作品</h2><br>\r\n<h3>從展覽中不僅可以看到每張作品背後的故事</h3><br>\r\n<h3>還可以了解到每位得主在拍攝當下的心情寫照</h3><br>\r\n<h3>本次特別設立\"疫情下的世界\"專區</h3><br>\r\n<h3>讓同受困境的台灣人可以透過紀實照片看到各國人們的疫情生活</h3><br>\r\n<h3>也學習與之共處</h3><br>', 'exhibition_4.jpg', 'June', '23'),
(5, '我不是胖虎週年展', '展覽', '2022/06/24 ~ 2022/09/18', '週一至週日10:00-18:00', 180, '松山文創園區 北向製菸工廠', '我不是胖虎週年展－活動介紹<br>\r\n「我不是胖虎週年展」特別集結大家最喜歡的經典場景、立體造型跟貼圖對話，就是要滿足粉絲們的願望，<br>\r\n讓胖虎及小虎的距離可以靠近再靠近！週年展的四大主題展區，<br>\r\n包含胖虎的成長史回顧、世界名畫美術館、超多互動場景等你來打卡，<br>\r\n還有台灣獨家限定加碼超過千項周邊商品，必須先收藏一波，絕對不能錯過～<br>\r\n<br>\r\n我不是胖虎週年展－四大主題展區亮點！<br>\r\n<br>\r\n我是趙鐵柱，我不是胖虎！<br>\r\n<br>\r\n從早期的「胖虎」到近期的「水墨猛虎系列」，集結上百張的不二馬大叔手稿完整曝光，<br>\r\n還將日常工作檯面完整呈現，彷彿搭上時光機回到2017年置身在不二馬大叔的工作室，<br>\r\n不僅可以一探胖虎的誕生過程，還能透過手稿一筆一畫的線條，感受到作者細膩的表現出東北虎的表情及生命力，<br>\r\n獨特的國畫漫畫風格創作出一隻看起來營養過剩、經常掛著冷淡的表情，但一不小心就會出洋相的大臉東北虎，我是趙鐵柱！<br>\r\n<br>\r\n虎 cares 原畫 ? 我只在虎我自己<br>\r\n<br>\r\n胖虎在不二馬大叔的筆下，以萌趣、搞笑的手法結合國畫文化與西方藝術，搖身一變成了世界著名肖像畫的主角，<br>\r\n如《虎之自畫像》、《戴珍珠耳環的老虎》、《虎莉蓮夢露》、《創造胖虎》、《吶喊的虎》，<br>\r\n不僅保留了名畫原有的風格，胖虎的加入更多了一番趣味，無違和的樣子讓大家看了就會心一笑，直呼：萌！度！爆！表！<br>\r\n<br>\r\n萬物皆可胖虎-胖虎！胖虎？傻傻分不清楚<br>\r\n<br>\r\n超高人氣「一切皆可胖虎」及「百變胖虎」系列公仔，圓滾滾的身材再搭配搞怪表情，變身成各種動物卻越顯得合理可愛？<br>\r\n看似奇怪，卻又說不上來，睜大眼睛、仔細一看就會驚喜發現，一群反差萌的「胖虎」就在你的身邊。<br>\r', 'exhibition_5.jpg', 'June', '24'),
(6, '義大利怪美殿堂特展 TOILETPAPER: The Stu', '展覽', '2022/06/25 ~ 2022/09/18', '週一至週日10:00-18:00', 280, '華山1914文化創意產業園區 東2D', '<h3>從設計之都米蘭出發，</h3> <br>\r\n\r\n<h3>融合超現實主義與普普藝術的強烈風格，</h3> <br>\r\n\r\n<h3>以工作室結合家的概念，打造華麗怪奇的展覽空間，</h3> <br>\r\n\r\n<h3>今夏帶你來場華麗怪奇的時尚藝術饗宴．顛覆你對拍照展的想像！</h3> <p>\r\n\r\n<h5>【關於《TOILETPAPER》】</h5><br>\r\n\r\n\r\n\r\n<h5>以《TOILETPAPER》為命名，代表著這本雜誌「簡單而真實，不需認真思考」的概念，讓任何人都能輕鬆地在洗手間翻閱。<br>\r\n這本不含文字和廣告的純攝影雜誌，性質更猶如藝術刊物，打破了雜誌的主流符碼，探索新穎的藝術變貌和視覺延展的可能。</h5><br>', 'exhibition_6.jpg', 'June', '25'),
(7, '會動的文藝復興-高雄站', '展覽', '2022/06/25-2022/10/06', '週一至週日10:00-18:00', 390, '高雄國立科學工藝博物館', '全球首展「會動的文藝復興」藝術大展，一次看到36家世界級博物館及美術館的文藝復興時期24位藝術大師200幅名畫，<br>\r\n以及「世界文化遺產」聖母百花大教堂穹頂的巨幅濕壁畫「末日審判」。<br>\r\n<br>\r\n「會動的文藝復興」將於2022/06/03-09/11於高雄國立科學工藝博物館盛大展出。<br>\r\n展覽最大焦點是將百花大教堂穹頂濕壁畫從義大利佛羅倫斯「搬」到台灣來，這是全球第一個與世界著名教堂合作的創舉，<br>\r\n觀眾可以透過數位多媒體的方式10公尺近距離欣賞百花大教堂紅磚大圓拱頂的壯麗宏偉，以及壁畫「末日審判」構圖繁複精細，<br>\r\n採用透視法讓穹頂無限伸延的視覺震撼。<br>\r\n\r\n集結文藝復興時期300年最代表性的畫作，包括文藝復興三傑—達文西、拉斐爾、米開朗基羅與波提且利、卡拉瓦喬、<br>\r\n喬托、提香等24位大師200幅畫，委託獲得美國葛萊美、泰利獎等國際大獎的製作團隊以原寸仿真、AR介紹及540°環場投影沉浸式體驗，<br>搭配立體環繞音效等不同手法，提供觀眾兼具藝術性、教育性、娛樂性和社交性的多重享受的藝術饗宴，今年暑假您絕對不能錯過喔！<br> ', 'exhibition_7.jpg', 'June', '25'),
(8, 'Hello Ouchhh >_< AI數據藝術展', '展覽', '2022/06/25 ~ 2022/09/18', '週一至週日10:00-18:00', 280, '華山1914文化創意產業園區 紅磚區', '<h3>全球頂尖AI視覺藝術團隊來臺首次開展</h3> <br>\r\n<h4>來自土耳其,次創下世界紀錄的Ouchhh藝術團隊 , 擅長以人工智慧及大數據演算,創造衝擊性的視</h4><br>\r\n<h4>覺效果。今年,將首次在臺灣舉辦「Hello Ouchhh > _ < AI數據藝術展」十週年回顧特 展 , 透過人工智慧</h4><br>\r\n<h4>不受限於物理框架的特質 , 以多媒體數據用型(Data Sculpture),呈現宇宙 多維混合的秘密代碼,提供</h4><br>\r\n<h4>震撼的沉浸式感官饗宴。</h4><br>\r\n<h3>十年回顧 四大展館 八大作品,體驗最完整的AI數據藝術</h3><br>\r\n<h4>本次展覽集結 Ouchhh 團隊十年精華,帶給您沉浸式的數據雕塑。「Hello Ouchhh =< Al數據藝術展 」</h4><br>\r\n<h4>在華山1914 文創園區-紅磚區舉辦,共有四大場館,近 500坪體驗空間,以 Ouchhh最具代表性的八大</h4><br>\r\n<h4>作品,讓臺灣觀眾不用出國即可見證經典,今年 暑假快來體驗最磅礴的AI數據藝術展。</h4><br>', 'exhibition_8.jpg', 'June', '25'),
(9, '鬼滅之刃全集中展', '展覽', '2022/06/25 ~ 2022/10/10', '週一至週日9:00-17:00', 250, '國立臺灣科學教育館 七樓 西側特展區', '《鬼滅之刃》由吾峠呼世晴老師原著，透過敘述人與鬼之間的虐心故事、與鬼之間華麗戰鬥，加上人物角色的深刻描繪，成為了世界知名的人氣作品<br>\r\n鬼滅之刃全集中展將展品與場景「全集中」在此，帶您回到電視動畫《鬼滅之刃》竈門炭治郎立志篇<br>\r\n還特別增加【無限列車篇】展區，全新展區！敬請期待炎柱的英姿在此展現<br>', 'exhibition_9.jpg', 'June', '25'),
(10, '西班牙出奇偶劇團-我在車站等你', '休閒娛樂', '2022/08/17', '10:00', 800, '駁二正港小劇場', '在一個無人經過的火車站裡，住著一位孤獨的老人，還有一名叫阿尼的流浪狗改變了這平靜的一切!<br>\r\n接下來阿尼究竟會帶給老人有什麼樣的驚喜呢?車站裡頭到底會創造出什麼樣的有趣的故事呢!<br>\r\n充滿音樂性、趣味橫生、高潮迭起、就連不愛看偶戲的大人都會深深愛上，充滿驚喜的別樣偶戲,突破語言隔閡風靡全球。<br>我們相約在車站等你們喔!<br>', 'entertainment_1.jpg', 'August', '17'),
(11, '《失物之城》沈浸式音樂劇場', '休閒娛樂', '2022/06/10', '20:30', 2000, '北投文物館 BEITOU MUSEUM', '北投 – 古語中的女巫之地<br>\r\n傳說在某個月圓之夜<br>\r\n來到煙霧繚繞的北投<br>\r\n在一座百年古老建築中<br>\r\n跟著巫女的歌聲<br>\r\n便能踏上回溯時光之途<br>\r\n像命定般的<br>\r\n只在限定的幾個夜晚<br>\r\n巫女將帶著依約而來的人們<br>\r\n穿越時空<br>\r\n<br>\r\n一步步<br>\r\n在時間的軸線上探索<br>\r\n找尋被記憶封存的靈魂碎片<br>\r\n遇見那傳說中的<br>\r\n「失物之城」<br>\r\n<br>\r\n許哲珮 x 瘋戲樂 x 北投文物館<br>', 'entertainment_2.jpg', 'June', '10'),
(12, 'P. LEAGUE+ 新北國王季後賽主場', '休閒娛樂', '2022/06/09', '19:00', 600, '新北市立新莊體育館', '新北人戰出來！<br>新北國王的城堡新莊體育館需要你們，<br>參與成軍第一年舉辦的每一場盛宴，<br>與國王禁衛軍一同Crown the City，<br>榮耀新北市這410萬位王者的帝國！<br>', 'entertainment_3.jpg', 'June', '9'),
(13, 'PLG季後賽 福爾摩沙台新夢想家主場', '休閒娛樂', '2022/06/06', '19:00', 5000, '洲際迷你蛋', '季初時，你問，夢想家的本季目標是什麼？<br>\r\n#無庸置疑 成為更好的自己，用表現回應每一份的努力和支持。<br>\r\n而此刻，我夢不改季初目標，決心衝擊總冠軍，要用表現回應每一份的努力和支持！<br>\r\n夢想家人們，請跟著我們一起夢<br>\r\n「一群人做夢，夢想就會成真。」<br>\r\n<h3>We’re DREAMERS. #NoDoubt</h3><br>', 'entertainment_4.jpg', 'June', '6'),
(14, '《21-22 t1高雄全家海神隊 冠軍賽主場賽事 》', '休閒娛樂', '2022/06/08', '19:00', 2500, '鳳山體育館', '#AquaNation<br>\r\n🔱 從一而終 Seeing is Believing 🌊<br>\r\n堅持初心、保持第一、邁向隊史首座總冠軍。<br>\r\n#從一而終 作為高雄全家海神隊的季後賽口號，「一」不只象徵球隊始終秉持建隊以來的信念與初心，<br>\r\n也傳達球隊是聯盟本季唯一1支從開季到季末都保持第一名的球隊，最後更要以總冠軍為別具意義的隊史元年劃下完美句點。<br>\r\n英文口號 「Seeing is Believing」，除了傳遞海神無私、流動的球風只要看了就懂，<br>\r\n也向成軍以來一路陪伴、相挺我們前行的神隊友致敬，再來一起見證季後賽每一個神奇的時刻。<br>\r\n設計上延伸創隊以來的核心元素，季後賽主視覺同樣採用船型結構及綠燈塔，傳達海神與綠燈塔就像全知之眼一樣能洞悉全局，<br>\r\n不只呼應英語口號中的 Seeing 的意涵，同時在狂風暴雨之中引導全隊萬浪一心，一同航向最終目標，贏下隊史首座總冠軍；<br>\r\n標準字設計上，將其中一支三叉戟融入從一而終的一，不僅象徵著定海神針，並期勉勵每位成員這趟旅程才剛開始。<br>\r\n畫面暗藏的 #數字彩蛋 886-8-001，則分別代表台灣國碼、高雄郵遞區號以及第一，<br>\r\n不只要向台灣和高雄這片土地致敬，更展現球隊將為高雄贏下職業籃球第一座榮耀的決心。<br>\r\nWe the south.<br>\r\nWe’re Kaohsiung Aquas.', 'entertainment_5.jpg', 'June', '8'),
(15, '蕭秉治 狂人 新專輯演唱會', '休閒娛樂', '2022/07/02', '19:00', 2000, 'Zepp New Taipei', '蕭秉治 狂人 新專輯演唱會<br>\r\n<br>\r\n狂人歸來時<br>\r\n所有瘋狂 都是終極浪漫<br>\r\n極盡所能的狂想<br>\r\n要你在場<br>\r\n <br>\r\n最痛的情歌 往往有毒<br>\r\n每唱一句 都是慢性中毒<br>\r\n <br>\r\n那天 我們要大合唱<br>\r\n集體成癮<br>\r\n肆無忌憚<br>', 'entertainment_6.jpg', 'July', '2'),
(16, 'P. LEAGUE+第二季新竹街口攻城獅主場季後賽', '休閒娛樂', '2022/06/14', '19:00', 1800, '新竹縣體育館', '做好準備！季後賽榮耀之路 #RoarToGlory #沒有畏什麼！<br>\r\n<br>\r\n「你們可以不是最好的，但必須要是最勇敢的球員」－林冠綸總教練 2022.3.25<br>\r\n<br>\r\n從 2021-22 賽季初 #ReadyToRoar 到即將為了季後賽榮耀而戰的 #RoarToGlory。<br>\r\n<br>\r\n面對酸民惡意批評、面對網路上的質疑、面對場上艱難挑戰，我們怎麼想，哪需要跟你解釋？<br>\r\n\r\n <p>\r\n\r\n這就是攻城獅，#沒有畏什麼！<br>', 'entertainment_7.jpg', 'June', '14'),
(17, '韋禮安「如果可以，我想和你明天再見」小巨蛋演唱會', '休閒娛樂', '2022/09/10', '19:30', 3600, '臺北小巨蛋', '如果可以，我想和你明天再見<br>\r\n<br>\r\n好像隨時某一刻就會被剝奪的相聚<br>\r\n<br>\r\n在約定再見之前<br>\r\n<br>\r\n踏實地預習相見時的光影<br>\r\n<br>\r\n如果可以<br><br>\r\n我想和你明天再見<br><br>\r\n無關期盼 是我們之間的約定<br>', 'entertainment_8.jpg', 'September', '10'),
(18, '熊仔 Kumachan PRO MAX 2022 台北場 ', '休閒娛樂', '2022/06/11', '19:30', 1500, '信義劇場 Legacy MAX', '聽熊仔的專輯，我們總是可以在娛樂的過程中發現哲學概念、沈浸架空的世界觀、探索一個個巧妙的彩蛋，每每都能帶給聽眾顛覆性的感官體驗。<br>\r\n<br>\r\n2015 熊仔透過《∞無限》專輯，探討對於夢想剛起步的徬徨<br>\r\n<br>\r\n2019《夢想成真》我們見證豹子膽在夢想與現實交錯的狂想<br>\r\n<br>\r\n2022 《PRO》專輯，則以熊仔最擅長的黑色幽默，赤裸且真誠地向大眾拋出提問與反思，<br>\r\n在夢想職業化後，生活裡日復一日地重複推動這名為「努力」的巨石，站上「PRO」的山頂，下一步又將往何處？<br>\r\n<br>\r\n不論家人的期許、職場上的人際關係、甚至是社會的框架之下，時常使我們的生活失去平衡、忽略了自我的心理狀態，<br>\r\n這種對自我、生活的疲憊、無力感正是熊仔正在思考的問題：「光鮮亮麗的職業背後，如何面對挫折與職業倦怠？」<br>\r\n<br>\r\n挾著出道以來不停的創作與思考，這次的熊仔，將帶來全新概念專輯《PRO》，以及一場集結過往所有作品的演唱會「PRO MAX」，<br>\r\n邀請你一起打開內心，在疲憊的生活之中一同面對挫折，共同感受也享受熊仔式的苦笑人生觀。<br>', 'entertainment_9.jpg', 'June', '11'),
(19, '【電影藝術講堂】拍影集－時代煉金術《茶金》', '課程講座', '2022/05/14 ~ 2022/6/12', '13:00-15:00', 180, '高雄市電影館', 'OTT世代風聲鵲起，人們的觀看方式，如何改變電視、甚至是電影的生態？<br> \r\n<br>\r\n回首輝煌《茶金》影集中的時代旅程，由金獎製作人剖析打造炙手可熱影集的開發要點；<br>再從導演觀點出發，共享如何挑戰高規格製作的劇本轉化；最後，美術設計現身拆解再現時代風華的魔法。<br>\r\n<br>\r\n從企劃端到拍攝端，一窺質感超卓的時代影集，那絕無僅有、去蕪存菁的淬鍊過程！<br>', 'course_1.jpg', 'May', '14'),
(20, '「教學的技術 」講座', '課程講座', '2019/01/27 ~  2019/02/23', '19:30-21:30', 888, '逢甲大學 第九國際會議廳', '「老師要對教學負完全責任！」<br>\r\n<br>\r\n所有上台講課、演講的老師／講師們都需要的一門課！<br>\r\n<br><br>\r\nTED講者、大學教授等「老師背後的老師」、講師界學員評價滿分的「職業選手 」<br><br>\r\n知名上市公司企業內訓講師 王永福（福哥）告訴你：<br>\r\n<br>\r\n\r\n沒有不會教的老師，沒有教不會的學生。<br>\r\n教學是有方法的，這是一門可以教，也可以學的技術！<br><br><br>\r\n「教學的技術」是所有上台講課、演講的老師／講師們都需要的一門課！<br><br>\r\n教學路上，你一定遇過這些狀況——<br>\r\n》滿場學生都是心不甘情不願來上課。<br>\r\n》你丟出問題，永遠沒人主動回答。<br>\r\n》你在台上口沫橫飛地講述，學生在底下滑手機。<br>\r\n》學生的課程滿意度，經常與你自己的標準不一致……<br><br>\r\n包含上述狀況在內，教學過程中最常遭遇的12個案例，<br>\r\n我會逐一解析因應方式與可運用的教學技術。<br>\r\n這是職業級講師過去從未公開的 Know-How 跟祕密，<br>\r\n幫助你改善教學成效、提升教學滿意度，<br>\r\n成為讓學生知道、得到、做到的好老師。<br>', 'course_2.jpg', 'January', '27'),
(21, '品牌的力量：品牌巨星的誕生三部曲', '課程講座', '2022/07/11', '09:30 ~16:30', 7500, '全國創新創業總會', '產品要暢銷，不是靠產品力，而是靠品牌力！<br>「品牌巨星的誕生三部曲」，連續三堂(18小時)課程，<br>以實務案例及課題演練形式，幫助你一步一步設定品牌目標、區隔市場以及定位產品，<br>同時透過命名、SLOGAN、包裝設計、以及產品文案，強大你的品牌力量。<br>品牌力強大，你的品牌就是Superstar！<br>', 'course_3.jpg', 'July', '11'),
(22, 'NPO Ｗorkshop｜只要兩堂課，一手打造組織品牌力', '課程講座', '2022/06/25~ 2022/07/09', '10:00-17:00', 1000, 'Impact Foundry 影響力工場', 'NPO Workshop ｜只要兩堂課，一手打造組織品牌力<br>\r\n<br>\r\nNPO 擅長從「理念」與「價值」故事的方式闡述品牌，但要如何與對的受眾進行有效溝通？又如何在組織內部建立對品牌的認同感？<br>\r\n<br>\r\n藉由品牌經營觀念導入與系統化工具演練，重新檢視組織的特色與受眾的樣貌，訂定組織獨特價值，並建立對外行銷與對內溝通的策略。<br>\r\n<br>\r\n本次課程一共分為兩天，將品牌概念帶給NPO組織夥伴，也加入工具的演練課程，<br>協助 NPO 對內的組織文化塑造與對外的行銷溝通，可以展現一致且有力的形象。', 'course_4.jpg', 'June', '25'),
(23, '2022 MCEI 午餐行銷論壇 PART 2：誰是行銷人氣', '課程講座', '2022/07/06', '12:00 ~ 14:00', 800, '台灣台北市鼎鼐商務中心-南京復興館 ', '大明星代言到底是春藥還是毒藥?   <br>\r\n<br>\r\n微網紅到底是紅還是不紅？<br>\r\n<br>\r\n代言人是快速提升消費者對品牌的知名度與好感度的戰略之一，如何正確挑選與品牌形象相襯的代言人，<br>產生預期傳播效益並帶來正向效果，時常成為企業行銷策略裡廣泛探討的學問。<br>\r\n\r\n明星代言策略成功吸引消費者注意後，難保成為票房保證、促進商品銷售成長，為企業帶來商業價值，<br>當消費者購買傾向與代言名人的信賴感無顯著關係時，企業品牌付出高額代言費是否仍然值得？<br>\r\n<br>\r\n相較之下，運用微網紅行銷（Micro Influencer Marketing）同樣是可有效提升業績與品牌知名度的行銷手法，<br>透過這些關鍵意見消費者(Key Opinion Consumer，KOC)的推薦，與同溫層深入溝通及互動，堆疊口碑與產品信任度，<br>具有高投資報酬率的行銷效益，然而這是否意謂微網紅或直播主等自媒體可能取代品牌大使的精神象徵，成為日後行銷模式的主力?<br>\r\n\r\n本活動針對品牌行銷目標與需求，邀請業界資歷豐富的專家共同探討明星名人代言的成功應用案例與網紅直播經濟的行銷新興趨勢，<br>透過2小時的精采對談，除了交織行銷人腦海裡各種活用受眾影響力的最佳行銷策略，又將激盪出什麼意想不到的火花？<br>更多關於行銷的創意學習與經驗交流，正等您來發掘~', 'course_5.jpg', 'July', '6'),
(24, 'IG 視覺美感力行銷', '課程講座', '2022/08/14', '10:00 ~ 17:00', 3500, '華岡大安中心', '經營著 IG 帳號的你，也有這些煩惱嗎？<br><br>\r\n\r\n \r\n\r\n「 不同尺寸和色彩的照片讓 IG 版面好雜亂，沒有設計感... 」<br><br>\r\n\r\n「 用心寫文案發照片，追蹤數卻停滯不前... 」<br><br>\r\n\r\n IG 視覺美感力行銷 是線上少見以「視覺」為重點的 Instagram 行銷課程，我們從 IG 的核心 ——「照片」為切入點，<br>帶你學習版面構圖及文案發想，並分享 SEO 與 Hashtag 的有效操作方式。<br>\r\n\r\n讓擔任各大品牌攝影師、講課超過 200 場的 4Samantha 莎曼莎老師，手把手把 IG 美感經營的秘訣教給你！<br><br>\r\n\r\n\r\n漂亮版面、豐富文案、創意行銷、精準客群、有效推廣，一堂課程通通掌握！<br>', 'course_6.jpg', 'August', '14'),
(25, '【2D動畫工作坊】學好動畫還不夠？人氣爆棚Youtuber土', '課程講座', '2022/07/02~ 2022/07/03', '10:00 ~15:30 ', 2500, '台灣新北市板橋區中山路一段3號10F', '本次工作坊分為三大部分：<br><br>\r\n\r\n❶2D動畫實戰演練｜帶你熟悉2D動畫製作的流程與TVPaint實作演練，零基礎也可以輕鬆上手<br>\r\n\r\n❷跨領域結合｜整合品牌視覺，並建立自己提案規則，讓想法一次被買單！<br>\r\n\r\n❸打造媒體影響力｜增加曝光、合作機會的秘訣，深入經營個人創作平台的秘辛<br>', 'course_7.jpg', 'July', '2'),
(26, '商業談判：衝突管理，安內才能攘外｜劉必榮談判講座', '課程講座', '2022/06/22', '10:00 ~ 17:00', 4200, '集思台大會議中心國際會議廳', '劉必榮談判講座<br>\r\n商業談判：衝突管理，安內才能攘外<br>\r\n安內攘外：安定內部的動亂，抵禦外敵的侵凌。<br>\r\n「當國家危急存亡之秋，理應安內攘外，雙管齊下。」<br>\r\n<br><br>\r\n\r\n談判遇到衝突無可避免！合則利、破則裂是企業協商的常態。<br>\r\n面對衝突時，並不一定是壞事，端看談判過程！<br>\r\n談判權威劉必榮教授，教你不需要兩敗俱傷，聰明化解衝突、一起達到共識！<br>\r\n<br>\r\n \r\n\r\n📌如果你是...<br>\r\n- 業務銷售：洞悉對方需求，翻倍訂單成交率<br>\r\n- 採購人員：活用籌碼與讓步技巧，扭轉議價僵局<br>\r\n- 跨部門專案人員：爭取資源，協調衝突<br>\r\n- 行銷公關：提升說服，倍增提案成功率<br>\r\n<br>\r\n更不應該錯過！<br>', 'course_8.jpg', 'June', '22'),
(27, '【台北場次】拆解 SEO 四大關鍵，打造品牌行銷成功方程式', '課程講座', '2022/06/28', '14:00 ~ 17:00', 100, '將能數位行銷 台北辦公室', 'SEO 已成為數位行銷必佈局的流量成長策略，<br><br>\r\n\r\n您或多或少聽過，甚至自行操作及委外執行，<br><br>\r\n\r\n但SEO 的效益卻未如預期般，帶來網站流量與銷售成長。<br><br>\r\n\r\n「將能」本次邀請執行長 連老師，分享他擔任 20 年 SEO  顧問，<br><br>\r\n\r\n以及服務千家企業後，所淬鍊出來的 SEO 操作秘訣。<br><br>\r\n\r\n我們會透過這場講座，讓您知道：「 做好 SEO ，是有方法可循的 」，<br><br>\r\n\r\n讓您找到適合自家品牌的執行方式。<br>', 'course_9.jpg', 'June', '28'),
(28, 'TEDxNCCU 2022年會【 λ 】', '線上活動', '2022/06/17', '13:00 ~ 17:00', 150, '線上', '【 年度理念 】\r\n\r\n　　TEDxNCCU本年度的年會主題為《 λ 》，λ（lambda) 是第十一個希臘字母，在物理上也是波長的符號。<br>本次年會以此為題，講述人與人之間靠近的速度，互相影響的頻率，探討我們如何在各個的碰撞中，形塑外在世界與自我認知。<br>\r\n\r\n\r\n　　一個人在自己的人生中，其所經歷的事件、思考、感受等內在歷程；接受到的外界種種刺激，都影響著我們。<br>內在和外界無以割捨的交織，建構出一個人的個性、價值觀、行為。<br><br>\r\n\r\n\r\n　　而每個人相信的世界，都是由自己選擇接收的觀點、感受所建構而成。<br>因此以「 λ 」為題，一步步拆解外在世界跟個人的互動，當不同的波相遇、錯落，相互影響的頻率，形成世界與自我的距離。<br>', 'online_1.jpg', 'June', '17'),
(29, '與大地藝術來談一場自然與人文的戀愛吧！', '線上活動', '2022/06/05', '14:30', 250, '線上', '你喜歡藝術嗎？走訪台日經典藝術之旅系列講座<br>\r\n\r\n當藝術跳脫框架，走出美術館或藝廊，與海洋、土地、在地文化交會，會產生什麼美麗的風采呢？<br>\r\n欣講堂邀請到人氣藝術導覽講師秀華老師帶大家遊歷日本及台灣的人氣大地藝術季，讓藝術不再只是博物館的展示收藏，<br>而是你我生活的靈感來源、滋養我們心靈的朋友。此外，這系列講座會帶大家了解藝術祭的起源、故事與核心精神、<br>傾聽每個作品背後的故事。現在就讓我們與大地藝術季談一場自然與人文的戀愛吧！<br>', 'online_2.jpg', 'June', '5'),
(30, '夢想進行式線上音樂會', '線上活動', '2022/06/25', '19:30 ~ 21:30', 189, '線上', '活動資訊<br>\r\n1.請於7:00pm開始進場，了解須知。<br>\r\n2.在良好的網路環境下。<br>\r\n3.若沒有好的喇吧，請盡量使用耳機。<br>\r\n4.線上有服務人員待命，可隨時提問。<br>\r\n5.不用穿戴整齊，可攜帶自己愛吃愛喝的東西。<br>\r\n6.歡迎呼朋喚友闔家觀賞，一台設備可以全家觀看（那就備好喇吧喔）。<br>\r\n7.有中場休息時間十分鐘。<br>\r\n8.有抽獎，請記得即時互動回應。<br>\r\n9.臉書：平威的音樂花園有隨時更新的消息。<br>\r\n10.任何問題，歡迎聯絡。<br>', 'online_3.jpg', 'June', '25'),
(31, '《虛擬真實》是虛擬還是真實的？', '線上活動', '2022/06/19', '14:00 ~ 17:00', 300, '線上', '活動資訊<br>\r\n我們從這個意念出發：身體作為自身的鏡子可以擁有許多面向：真實、虛擬、合成、賽博格......<br>事實上，經驗告訴我們，身體如果要真實地存在，不論是真實、虛擬、合成、賽博格，都必須抵抗所有透明的形式，保有自身的不透明性、弱點和力量。<br>\r\n<br>\r\n——Milon, A. (2021).  虛擬真實：我們的身體在或不在？. p.139<br>\r\n米龍在書中探討三個關於身體的虛擬真實主題：網際網路中的無物質身體、好萊塢電影中的虛擬身體，<br>以及數位藝術創作中的身體。如果你也對這些主題感到好奇，歡迎一起來參加本次讀書會，和我們一起討論以下的問題：<br>\r\n<br>\r\n虛擬 (virtual) 的概念是指什麼？現實的相反？尚未實現的可能性？跟虛構 (fiction) 有什麼不一樣？<br>\r\n網路元宇宙時代，身體可以幻化成各種面貌，但是，我們真的自由了嗎？<br>\r\n我們的身體是否有其界限？科技是幫助我們突破界限、帶來新穎的體驗，還是反過頭來把真實世界變成一個沒有深度、沒有感覺的幻象？<br>\r\n好萊塢電影與數位藝術如何形塑我們對身體與體驗的想像？<br>', 'online_4.jpg', 'June', '19'),
(32, '驫舞劇場2022 克萊茵技巧線上工作坊：疫情中的身體覺察與平', '線上活動', '2022/06/20', '19:00 ~22:00', 800, '線上', '<br>克萊茵技巧（Klein Technique）是一門連結身體和心理的凝聚性動作系統，早於 1970 年代就被建立，\r\n並廣泛傳播與教學於眾多國家，影響數以百計的表演者。</br>\r\n\r\n美國舞蹈教育家蘇珊克萊茵在 1972 年發展出「克萊茵技巧」，透過對於動作的分析、整合、連結與清晰化，改變每個人的動作形態。當骨骼被清楚地重整後，身體變得更連結、更堅固、更有效能且更清晰，甚至對於個人身體內在的智慧有了新層面的認知增長。\r\n\r\n自 2016 年開始，今年是驫舞劇場連續第七年舉辦克萊茵技巧工作坊，邀請專業講師芭芭拉．馬勒（Barbara Mahler）授課，從人體 206 根骨頭的認識，到對於尾骨的體認與掌握，從尾骨進而掌握全身的療癒，感受身體與內在狀態的對話。盼望與更多身體工作者分享臺灣舞蹈教育中缺乏的身體修復技巧，為臺灣舞蹈創造一個更好的環境。\r\n\r\n在克萊茵技巧工作坊中，「以骨為主，肌肉為輔」的概念將被清楚的重整與理解，身體變得更連結、更堅固、更有效能且更清晰。課程中不是學習如何運動這些肌肉，而是著重在如何「喚醒」肌肉群，並運用它們來重新調整骨骼成為一直線。透過循序漸進在不同層面的骨骼活動，覺察自我狀態並釋放長期累積在身體裡的壓力，嘗試獲得更健康、更平衡的身心狀態。', 'online_5.jpg', 'June', '20'),
(33, '2022 夏日香氛節 ＃全民運動會', '線上活動', '2022-06-20', '19:30 ~ 21:00', 600, '線上', '精油占卜 + 瑜珈練習<br>\r\n經歷有氧及體能訓練，運動會的最後，我們希望大家可以藉由精油占卜，更加認識自己，<br>並結合瑜珈開髖伸展，慢動作的練習讓忙碌的心沉靜下來，好好學習和自己相處。<br>', 'online_6.jpg', 'June', '20'),
(34, '【線上夏令營】奇幻魔法營', '線上活動', '2022/07/11~2022/07/15', '00:00-00:00', 3000, '線上', '學習魔術不只好玩，它可以啟發智慧，激發想像力，手腦並用，培養自信心，<br>在神秘、歡笑、驚訝的學習氣氛下，刺激小朋友的思考模式激發想像力！魔術能與人分享心靈的喜悅，自娛娛人，建立良好的人際互動，<br>所學會的魔術更可以在班際活動、慶祝活動上表演，成為眾所矚目的焦點。看似驚奇的魔術，<br>即將讓小朋友輕易地大顯身手，從變魔術中自信加倍，訓練口才，成為自己獨有的才藝，增加人緣魅力百分百！<br>\r\n- 課程特色 －<br>\r\n<br>\r\n訓練說話技巧個人魅力：藉由表演用故事來詮釋魔術，使說話技巧提升，藉由表演展現個人魅力。<br>\r\n提升手部靈活度：藉由魔術手法訓練使平時少少運作的指節靈活運用。<br>\r\n增加信心與勇氣：藉由表演學習提升上台的信心與勇氣。<br>\r\n增進人際關係：藉由表演魔術使孩子在生活上成為大家的開心果。<br>\r\n激發創作力：自己的劇本與台詞，創造屬於自己與眾不同的表演。<br>\r\n學習知識：藉由學習魔術，讓孩子了解物理、化學原理等知識。<br>\r\n線上課程結束後，加碼提供教學影片，讓學生課後可重覆練習。<br>', 'online_7.jpg', 'July', '11'),
(35, '沙發主人來上課—從在歐洲流浪住進屠宰場到把世界帶進學校', '線上活動', '2022/07/05', '19:00 ~ 21:30', 200, '線上', '在這場講座，你可以聽到<br><br>\r\n\r\nFreegan之路的開始——<br><br>\r\n\r\n在歐洲到處搭便車、打工換宿、住進屠宰場的日子<br>\r\n開始Freegan 之路的歷程／契機<br>\r\n如何把世界帶進學校—— <br><br>\r\n\r\n沙發客來上課——我開了一間獵人頭公司/歷程/契機<br>\r\n在過程中遇到的挑戰與如何突破？<br>\r\n東西本來就應該被珍惜——<br><br>\r\n\r\n發起第一屆全台免廢市集/契機<br>\r\n推廣禮物經濟理念的歷程<br>', 'online_8.jpg', 'July', '5'),
(36, '五堅情Moon Landing 月面著陸 海外限定線上演唱會', '線上活動', '2022/08/07', '19:30 ~ 21:10', 500, '線上', '成軍585個日子 五堅情展開新序幕<br><br>\r\n\r\n因為堅信 才能建構擁有堅果的國度<br><br>\r\n\r\n通往里程碑的每一哩路 都有你的加入<br><br><br>\r\n\r\n \r\n\r\n讓我們攜手成就 讓我們相約築夢<br><br>\r\n\r\n聚集眼神裡的堅定 一起用力唱著<br><br>\r\n\r\n首場萬人演唱會 一同跨步 月面著陸<br><br><br>\r\n\r\n \r\n\r\n當我們一起飛<br><br>\r\n\r\n無重力是彼此的信念<br><br>\r\n\r\n降落抵達月面<br><br>\r\n\r\n著陸前 無間<br><br><br>\r\n\r\n \r\n\r\n五堅情 無間友誼<br><br>\r\n\r\nWe are in charge of destiny<br><br>\r\n\r\n月面著陸 我們等你<br>', 'online_9.png', 'August', '7');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`pNo`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `performance`
--
ALTER TABLE `performance`
  MODIFY `pNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
