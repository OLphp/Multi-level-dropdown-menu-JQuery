language='javascript'
            var lastElem = 'page1.php';
            function ResetAll()
            {
                var arr = new Array();
                                    arr.push('page1.php');
                                    arr.push('page2.php');
                                    arr.push('page3.php');
                                    arr.push('page4.php');
                                    arr.push('page5.php');
                                    arr.push('page6.php');
                                    arr.push('page7.php');
                                for(var i=0; i<arr.length; i++)
                {
                    gE("i_menu_"+arr[i]).className = "";
                    gE("i"+arr[i]).className = "hidden";
                }
            }

            function SelectLast()
            {
                gE("i_menu_"+lastElem).className = "act";
                gE("i"+lastElem).className = "menu";
            }

            function ResetSub()
            {
                $('.thirdlevelmenu').css('display','none');
            }		

            function ThirdLevelMenu(handler, lk)
            {
                ResetSub();
                $(handler).children('div.thirdlevelmenu').css('display','block');
                left = $(handler).offset().left + 448;

                $(handler).children('div').css({'left' : '0px', 'right' : 'auto'});
                if(left > $(window).width())
                {
                    $(handler).children('div').css({'right' : '0px', 'left' : 'auto'});
                }
            }

