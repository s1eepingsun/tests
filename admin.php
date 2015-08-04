<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Админка</title>	    
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/main.css" rel="stylesheet">    
    <script src="js/jquery-2.0.0.min.js"></script>
    <script src="js/mustache.js"></script>
    <script src="js/admin.js"></script>
</head>
<body>
     <div id="iq_ui">
        <div id="iq_ui_in">
            
            <div class="mc_iq" id="field">
                
                <div class="lp_top_1">

                    <div class="lp_top_in" id="nav1" style="text-align: center;">
                        <span id="" style=" margin-left: -14px;cursor: pointer; text-align: left;font-family: Verdana,Geneva,sans-serif; letter-spacing: 0px;"><b>Математический Тест</b></span>
                        <span id="" style="">&nbsp;</span>
                        <span id="about_programm" style="cursor: pointer;margin-left: 5px;font-family: Verdana,Geneva,sans-serif; letter-spacing: 0px;">Описание</span>
                        <span id="" style="">&nbsp;</span>
                        <span id="gbShow" style="margin-left: 8px; cursor: pointer;font-family: Verdana,Geneva,sans-serif; letter-spacing: 0px;color:black; float: none;"><a href="http://kirillsite.esy.es/admin.php" style="text-decoration: none;">Админка</a></span>
                        <span id="" style="margin-left: 10px; cursor: pointer;font-family: Verdana,Geneva,sans-serif; letter-spacing: 0px;"><a href="https://logic-games.spb.ru/" style="text-decoration: none;">Перейти на другие игры</a></span></div>
                    <div class="lp_top_in" id="nav2">
                        <div id="top_nav_pan" style="display:inline-block;height:40px;overflow:hidden; ">

                            <div id="back_iq" class="top_p_b_nav_iq_notactive" style="margin-left: 0px;font-size: 8pt; ">
                                <div class="t_co_nav">
                                    <div class="co_nav">
                                         Предыдущий вопрос
                                    </div>
                                </div>
                            </div>

                            <div id="forward_iq" class="top_p_b_nav_iq_notactive" style="font-size: 8pt;">
                                <div class="t_co_nav">
                                    <div class="co_nav">
                                        Следующий вопрос
                                    </div>
                                </div>
                            </div>
                            <div id="new-test" class="top_p_b_nav_iq" style="font-size: 8pt;">
                                <div class="t_co_nav">
                                    <div class="co_nav">
                                        Новый тест
                                    </div>
                                </div>
                            </div>

                            <div id="close_iq" class="top_p_b_nav_iq_notactive" style="font-size: 8pt;">
                                <div class="t_co_nav">
                                    <div class="co_nav">
                                        Закончить тест
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>									
                     
                <div id="admin-section">
                </div>
            </div>

            <div id="footer" style="text-align:center; background: #8b8b83; margin-top:0px;">
                <div id="activityDiv">
                    <p>Сейчас на сайте — гостей: 0, зарегистрированных пользователей: 3 (из 117507).</p>
                </div>
                <div id="vstats">
                    <p></p><p>Всего уникальных посетителей — вчера: 250, сегодня: 37</p>    <p></p>
                </div>
                <div id="copyright">©
                    Программный продукт <a href="http://v6.spb.ru/" target="_blank">Юридического центра «Восстания-6»</a>
                   
                </div>
            </div> 
        </div>

    </div>
    
</body>
</html>