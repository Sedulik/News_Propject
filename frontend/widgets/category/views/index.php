
<div class="container pen">
    <div class="row7">
        <div class="col-sm-12">

            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>


                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <?php foreach ($categories as $category) {
                            if (empty($category['parent_id'])) {
                                ?>
                                <ul class="nav navbar-nav">

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- <i class="fa fa-bars"> </i> --><?= $category['title']?><b class="caret"></b></a>
                                       <?php if(!empty($category['parent_id'])){ ?>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle"
                                                                                     data-toggle="dropdown"> Անշարժ
                                                    գույք</a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Վաճառք</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Բնակարաններ</a></li>
                                                            <li><a href="#">Տներ</a></li>
                                                            <li><a href="#">Հողատարածք</a></li>
                                                            <li><a href="#">Կոմերցիոն</a></li>
                                                            <li><a href="#">Այլ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Վարձակալություն</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Բնակարաններ</a></li>
                                                            <li><a href="#">Տներ</a></li>
                                                            <li><a href="#">Գրասենյակային և այլ տարածքներ</a></li>
                                                            <li><a href="#">Ավտոտնակներ</a></li>
                                                            <li><a href="#">Այլ</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <?php
                                            }
                                             ?>
                                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle"
                                                                                     data-toggle="dropdown">Տրանսպորտ</a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Ավտոմեքենաներ</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Ավտոմեքենաներ</a></li>
                                                            <li><a href="#">Ավտոմեքենաներ արտերկրից</a></li>
                                                            <li><a href="#">Վթարված մեքենաներ որպես պահեստամաս</a></li>
                                                            <li><a href="#">Պահեստամասեր</a></li>
                                                            <li><a href="#">Անիվներ և անվադողեր</a></li>
                                                            <li><a href="#">Աուդիոտեխնիկա</a></li>
                                                            <li><a href="#">Ավտոէլեկտրոնիկա</a></li>
                                                            <li><a href="#">Աքսեսուարներ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Մոտոցիկլներ</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Մոտոցիկլներ</a></li>
                                                            <li><a href="#">Պահեստամասեր և աքսեսուարներ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Հեծանիվներ</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Հեծանիվներ</a></li>
                                                            <li><a href="#">Պահեստամասեր և աքսեսուարներ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Կոմերցիոն
                                                            տրանսպորտ</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Բեռնատարներ</a></li>
                                                            <li><a href="#"> Ավտոբուսներ</a></li>
                                                            <li><a href="#">Գյուղատնտեսական տեխնիկա</a></li>
                                                            <li><a href="#">Բեռնատարներ</a></li>
                                                            <li><a href="#">Շինարարական և ծանր տեխնիկա</a></li>
                                                            <li><a href="#">Պահեստամասեր և աքսեսուարներ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown"> Այլ
                                                            տրանսպորտ</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Սկուտերներ և մոպեդներ</a></li>
                                                            <li><a href="#">Կվադրոցիկլներ և ձյունագնացներ</a></li>
                                                            <li><a href="#"> Ավտոտնակներ և կցանքներ</a></li>
                                                            <li><a href="#">Ջրային տրանսպորտ</a></li>
                                                            <li><a href="#">Այլ</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle"
                                                                                     data-toggle="dropdown">Էլեկտրոնիկա</a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Հեռախոսներ
                                                            և կապ</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Հեռախոսներ</a></li>
                                                            <li><a href="#">Աքսեսուարներ և պահեստամասեր</a></li>
                                                            <li><a href="#">Համարներ եւ ՍԻՄ-քարտեր</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Համակարգիչներ</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#"> Նոութբուքեր</a></li>
                                                            <li><a href="#">Պլանշետներ</a></li>
                                                            <li><a href="#">Համակարգիչներ</a></li>
                                                            <li><a href="#">Պերիֆերիկ սարքեր</a></li>
                                                            <li><a href="#">Սարքավորումներ</a></li>
                                                            <li><a href="#">Աքսեսուարներ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Խաղեր և
                                                            խաղային համակարգեր</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#"> Համակարգչային խաղեր</a></li>
                                                            <li><a href="#"> Խաղային համակարգեր</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown"> TV
                                                            և
                                                            վիդեո</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Հեռուստացույցներ</a></li>
                                                            <li><a href="#">Մեդիա նվագարկիչներ</a></li>
                                                            <li><a href="#"> Արբանյակային TV</a></li>
                                                            <li><a href="#">Աքսեսուարներ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#"
                                                                                             class="dropdown-toggle"
                                                                                             data-toggle="dropdown">
                                                            Ֆոտո և
                                                            վիդեոտեխնիկա</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Ֆոտոխցիկներ</a></li>
                                                            <li><a href="#">Տեսախցիկներ</a></li>
                                                            <li><a href="#">Աքսեսուարներ</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <!--


                                   <div class="collapse navbar-collapse" id="navbar-collapse-1">-->
<!--                    <ul class="nav navbar-nav">-->
<!---->
<!--                        <li class="dropdown">-->
<!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"> </i> Բոլոր բաժինները <b class="caret"></b></a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Անշարժ գույք</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Վաճառք</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Բնակարաններ</a></li>-->
<!--                                                <li><a href="#">Տներ</a></li>-->
<!--                                                <li><a href="#">Հողատարածք</a></li>-->
<!--                                                <li><a href="#">Կոմերցիոն</a></li>-->
<!--                                                <li><a href="#">Այլ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Վարձակալություն</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Բնակարաններ</a></li>-->
<!--                                                <li><a href="#">Տներ</a></li>-->
<!--                                                <li><a href="#">Գրասենյակային և այլ տարածքներ</a></li>-->
<!--                                                <li><a href="#">Ավտոտնակներ</a></li>-->
<!--                                                <li><a href="#">Այլ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Տրանսպորտ</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Ավտոմեքենաներ</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Ավտոմեքենաներ</a></li>-->
<!--                                                <li><a href="#">Ավտոմեքենաներ արտերկրից</a></li>-->
<!--                                                <li><a href="#">Վթարված մեքենաներ որպես պահեստամաս</a></li>-->
<!--                                                <li><a href="#">Պահեստամասեր</a></li>-->
<!--                                                <li><a href="#">Անիվներ և անվադողեր</a></li>-->
<!--                                                <li><a href="#">Աուդիոտեխնիկա</a></li>-->
<!--                                                <li><a href="#">Ավտոէլեկտրոնիկա</a></li>-->
<!--                                                <li><a href="#">Աքսեսուարներ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Մոտոցիկլներ</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Մոտոցիկլներ</a></li>-->
<!--                                                <li><a href="#">Պահեստամասեր և աքսեսուարներ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Հեծանիվներ</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Հեծանիվներ</a></li>-->
<!--                                                <li><a href="#">Պահեստամասեր և աքսեսուարներ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Կոմերցիոն տրանսպորտ</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Բեռնատարներ</a></li>-->
<!--                                                <li><a href="#"> Ավտոբուսներ</a></li>-->
<!--                                                <li><a href="#">Գյուղատնտեսական տեխնիկա</a></li>-->
<!--                                                <li><a href="#">Բեռնատարներ</a></li>-->
<!--                                                <li><a href="#">Շինարարական և ծանր տեխնիկա</a></li>-->
<!--                                                <li><a href="#">Պահեստամասեր և աքսեսուարներ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Այլ տրանսպորտ</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Սկուտերներ և մոպեդներ</a></li>-->
<!--                                                <li><a href="#">Կվադրոցիկլներ և ձյունագնացներ</a></li>-->
<!--                                                <li><a href="#"> Ավտոտնակներ և կցանքներ</a></li>-->
<!--                                                <li><a href="#">Ջրային տրանսպորտ</a></li>-->
<!--                                                <li><a href="#">Այլ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Էլեկտրոնիկա</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Հեռախոսներ և կապ</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Հեռախոսներ</a></li>-->
<!--                                                <li><a href="#">Աքսեսուարներ և պահեստամասեր</a></li>-->
<!--                                                <li><a href="#">Համարներ եւ ՍԻՄ-քարտեր</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Համակարգիչներ</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#"> Նոութբուքեր</a></li>-->
<!--                                                <li><a href="#">Պլանշետներ</a></li>-->
<!--                                                <li><a href="#">Համակարգիչներ</a></li>-->
<!--                                                <li><a href="#">Պերիֆերիկ սարքեր</a></li>-->
<!--                                                <li><a href="#">Սարքավորումներ</a></li>-->
<!--                                                <li><a href="#">Աքսեսուարներ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Խաղեր և խաղային համակարգեր</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#"> Համակարգչային խաղեր</a></li>-->
<!--                                                <li><a href="#"> Խաղային համակարգեր</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> TV և վիդեո</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Հեռուստացույցներ</a></li>-->
<!--                                                <li><a href="#">Մեդիա նվագարկիչներ</a></li>-->
<!--                                                <li><a href="#"> Արբանյակային TV</a></li>-->
<!--                                                <li><a href="#">Աքսեսուարներ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Ֆոտո և վիդեոտեխնիկա</a>-->
<!--                                            <ul class="dropdown-menu">-->
<!--                                                <li><a href="#">Ֆոտոխցիկներ</a></li>-->
<!--                                                <li><a href="#">Տեսախցիկներ</a></li>-->
<!--                                                <li><a href="#">Աքսեսուարներ</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="dropdown">-->
<!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Անշարժ գույք <b class="caret"></b></a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li class="dropdown dropdown-submenu">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Վաճառք</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Բնակարաններ</a></li>-->
<!--                                        <li><a href="#">Տներ</a></li>-->
<!--                                        <li><a href="#">Հողատարածք</a></li>-->
<!--                                        <li><a href="#">Կոմերցիոն</a></li>-->
<!--                                        <li><a href="#">Այլ</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown dropdown-submenu">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Վարձակալություն</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Բնակարաններ</a></li>-->
<!--                                        <li><a href="#">Տներ</a></li>-->
<!--                                        <li><a href="#">Գրասենյակային և այլ տարածքներ</a></li>-->
<!--                                        <li><a href="#">Ավտոտնակներ</a></li>-->
<!--                                        <li><a href="#">Այլ</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="dropdown">-->
<!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Տրանսպորտ<b class="caret"></b></a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li class="dropdown dropdown-submenu">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ավտոմեքենաներ</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Ավտոմեքենաներ</a></li>-->
<!--                                        <li><a href="#">Ավտոմեքենաներ արտերկրից</a></li>-->
<!--                                        <li><a href="#">Վթարված մեքենաներ որպես պահեստամաս</a></li>-->
<!--                                        <li><a href="#">Պահեստամասեր</a></li>-->
<!--                                        <li><a href="#">Անիվներ և անվադողեր</a></li>-->
<!--                                        <li><a href="#">Աուդիոտեխնիկա</a></li>-->
<!--                                        <li><a href="#">Ավտոէլեկտրոնիկա</a></li>-->
<!--                                        <li><a href="#">Աքսեսուարներ</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown dropdown-submenu">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Մոտոցիկլներ</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Մոտոցիկլներ</a></li>-->
<!--                                        <li><a href="#">Պահեստամասեր և աքսեսուարներ</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown dropdown-submenu">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Հեծանիվներ</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Հեծանիվներ</a></li>-->
<!--                                        <li><a href="#">Պահեստամասեր և աքսեսուարներ</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown dropdown-submenu">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Կոմերցիոն տրանսպորտ</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Բեռնատարներ</a></li>-->
<!--                                        <li><a href="#">Ավտոբուսներ</a></li>-->
<!--                                        <li><a href="#">Գյուղատնտեսական տեխնիկա</a></li>-->
<!--                                        <li><a href="#">Բեռնատարներ</a></li>-->
<!--                                        <li><a href="#">Շինարարական և ծանր տեխնիկա</a></li>-->
<!--                                        <li><a href="#">Պահեստամասեր և աքսեսուարներ</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown dropdown-submenu">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Այլ տրանսպորտ</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Սկուտերներ և մոպեդներ</a></li>-->
<!--                                        <li><a href="#">Կվադրոցիկլներ և ձյունագնացներ</a></li>-->
<!--                                        <li><a href="#"> Ավտոտնակներ և կցանքներ</a></li>-->
<!--                                        <li><a href="#">Ջրային տրանսպորտ</a></li>-->
<!--                                        <li><a href="#">Այլ</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="dropdown">-->
<!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Աշխատանք <b class="caret"></b></a>-->
<!---->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#"> Գրասենյակային աշխատանք</a></li>-->
<!--                                <li><a href="#">Առևտուր</a></li>-->
<!--                                <li><a href="#">Ֆինանսներ և իրավունք</a></li>-->
<!--                                <li><a href="#">Մեդիա և դիզայն</a></li>-->
<!--                                <li><a href="#">Ռեստորաններ և խոհանոց</a></li>-->
<!--                                <li><a href="#">Զբոսաշրջություն և հյուրանոցներ</a> </li>-->
<!--                                <li><a href="#">Տրանսպորտ և տաքսի</a></li>-->
<!--                                <li><a href="#">Գործարարություն և մարքեթինգ</a></li>-->
<!--                                <li><a href="#">Շինարարություն և ճարտարապետություն</a></li>-->
<!--                                <li><a href="#">Տնային տնտեսություն</a> </li>-->
<!--                                <li><a href="#">Արտադրության և արհեստ</a> </li>-->
<!--                                <li><a href="#">Կրթություն</a> </li>-->
<!--                                <li><a href="#">Բժշկություն և առողջություն</a> </li>-->
<!--                                <li><a href="#">Այլ</a></li>-->
<!--                                <li><a href="#">Փնտրում եմ աշխատանք</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!---->
<!--                        <li class="dropdown">-->
<!--                            --><?php
//                            if (Yii::$app->user->isGuest) {
//                            ?>
<!--                        <li class="adding"><a href="--><?//= yii\helpers\Url::to(['/site/login'])?><!--">Ավելացնել Հայտարարություններ</a></li>-->
<!--                        --><?php
//                        }else{
//                        ?>
<!---->
<!--                        <li class="adding"><a href="--><?//= yii\helpers\Url::to(['/site/'])?><!--">Ավելացնել Հայտարարություններ</a></li>-->
<!---->
<!---->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
<!--                </div>-->
<!--                /.navbar-collapse -->
<!--            </nav>-->
<!--            --><?php
//            $menuItems[] = '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>';
//
//            echo Nav::widget([
//                'items' => $menuItems,
//            ]);
//
//            }
//            ?>
        </div>
    </div>
</div>


