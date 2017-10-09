<?php get_header(); ?>

      <div class='rightBtns'>
        <a class='ic1' data-target='#calc' data-toggle='modal'></a>
        <a class='ic2' data-target='#code' data-toggle='modal'></a>
        <a class='ic3 chatBtn'></a>
      </div>
      <div class='chat'>
        <div class='chatBody'>
          <div class='headChat'>
            <i></i>
            <div class='closeChat'></div>
            Онлайн поддержка
          </div>
          <ul>
            <li>
              <div class='img'>
                <img alt='' src='<?php echo esc_url( get_template_directory_uri() );?>/img/chat1.png'>
              </div>
              <p>
                е с полной ответственностью за груз, объединим его по вашему требованию в единую
              </p>
            </li>
            <li>
              <div class='img right'>
                <img alt='' class='right' src='<?php echo esc_url( get_template_directory_uri() );?>/img/chat2.png'>
              </div>
              <p>
                е с полной ответственностью за груз, объединим его по вашему требованию в единую
              </p>
            </li>
          </ul>
          <div class='input'>
            <input placeholder='Type your msg' type='text'>
          </div>
        </div>
      </div>
      <div class='main'>
        <div class='shippingCosts'>
          <div class='row'>
            <div class='col-sm-12'>
              <h2>
                <span>Рассчитать стоимость доставки</span>
              </h2>
              <div class='body'>
                <div class='box'>
                  <h3>Параметры доставки</h3>
                  <div class='table'>
                    <a class='arr' href=''></a>
                    <table>
                      <tr>
                        <td>
                          <label>Откуда</label>
                        </td>
                        <td>
                          <div class='select'>
                            <div class='combo'>
                              <select>
                                <option value='5'>Китай</option>
                                <option value='5'>Китай2</option>
                                <option value='5'>Китай3</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Куда</label>
                        </td>
                        <td>
                          <div class='select'>
                            <div class='combo'>
                              <select>
                                <option value='5'>Россия</option>
                                <option value='5'>Россия2</option>
                                <option value='5'>Россия3</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Тариф</label>
                        </td>
                        <td>
                          <div class='select'>
                            <div class='combo'>
                              <select>
                                <option value='5'>Авто/Авиа бюджет</option>
                                <option value='5'>Авто/Авиа бюджет2</option>
                                <option value='5'>Авто/Авиа бюджет3</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class='box'>
                  <h3>Характеристики груза</h3>
                  <div class='table'>
                    <a class='arr' href=''></a>
                    <table>
                      <tr>
                        <td>
                          <label>Тип</label>
                        </td>
                        <td>
                          <div class='select'>
                            <div class='combo'>
                              <select>
                                <option value='5'>Видеорегистраторы</option>
                                <option value='5'>Видеорегистраторы2</option>
                                <option value='5'>Видеорегистраторы3</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Вес</label>
                        </td>
                        <td>
                          <div class='select'>
                            <input class='input' type='text' value='87'>
                            <span>кг</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Стоимость</label>
                        </td>
                        <td>
                          <div class='select'>
                            <input class='input' type='text' value='540'>
                            <span>USD</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            Объем
                            <i></i>
                          </label>
                        </td>
                        <td>
                          <div class='select'>
                            <input class='input' type='text' value='0,564'>
                            <span>
                              см
                              <sup>3</sup>
                            </span>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class='box'>
                  <h3>Сроки и Стоимость доставки</h3>
                  <div class='delivery'>
                    <i></i>
                    <a>Рассчитать доставку</a>
                  </div>
                  <div class='table none'>
                    <table>
                      <tr>
                        <td>
                          <label>Сроки доставки</label>
                        </td>
                        <td>
                          <strong>20-25</strong>
                          <span>Дней</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Стоимость</label>
                        </td>
                        <td>
                          <strong>2450</strong>
                          <span>USD</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            Страховка
                            <i></i>
                          </label>
                        </td>
                        <td>
                          <strong>250</strong>
                          <span>USD</span>
                        </td>
                      </tr>
                      <tr>
                        <td colspan='2'>
                          <div class='end'>
                            <label>Итого</label>
                            <strong>295</strong>
                            <span>USD</span>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class='exchangeRates'>
                <div class='row'>
                  <div class='col-md-6'>
                    <div class='leftBlok'>
                      <div class='left'>
                        <label>Курс валют</label>
                        <div class='combo'>
                          <select>
                            <option>USD</option>
                            <option>EUR</option>
                            <option>RUB</option>
                          </select>
                        </div>
                      </div>
                      <div class='info'>
                        <table>
                          <tr>
                            <td>0.92</td>
                            <td>24.80</td>
                            <td>58.86</td>
                          </tr>
                          <tr>
                            <td>
                              0.91
                              <span>EUR</span>
                            </td>
                            <td>
                              23.50
                              <span>ГРН</span>
                            </td>
                            <td>
                              56.86
                              <span>РУБ</span>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='rightBlok'>
                      <div class='left'>
                        <label>
                          Конвертер
                          <br>
                          валют
                        </label>
                      </div>
                      <div class='info'>
                        <table>
                          <tr>
                            <td>
                              <div class='input'>
                                <input type='text' value='295'>
                              </div>
                              <span>USD</span>
                            </td>
                            <td>
                              <div class='input'>
                                <input type='text' value='272.86'>
                              </div>
                              <span>EUR</span>
                            </td>
                            <td>
                              <div class='input'>
                                <input type='text' value='6 932.53'>
                              </div>
                              <span>ГРН</span>
                            </td>
                            <td>
                              <div class='input'>
                                <input type='text' value='16 774.70'>
                              </div>
                              <span>РУБ</span>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class='orderDelivery' data-target='#registration' data-toggle='modal'>заказать доставку груза</a>
            </div>
          </div>
        </div>
        <div class='cooperation'>
          <div class='cooperationIn'>
            <h2>Преимущества сотрудничества с Migoff</h2>
            <div class='screen'>
              <ul class='navTab' role='tablist'>
                <li class='active' role='presentation'>
                  <a aria-controls='home' data-toggle='tab' href='#tab1' role='tab'>
                    <i class='ic1'></i>
                    <span>
                      Пломбировка и защитная упаковка груза
                    </span>
                  </a>
                </li>
                <li role='presentation'>
                  <a aria-controls='profile' data-toggle='tab' href='#tab2' role='tab'>
                    <i class='ic2'></i>
                    <span>Бесплатная консолидация и хранение</span>
                  </a>
                </li>
                <li role='presentation'>
                  <a aria-controls='messages' data-toggle='tab' href='#tab3' role='tab'>
                    <i class='ic3'></i>
                    <span>100% страховка и ответственность за груз</span>
                  </a>
                </li>
                <li role='presentation'>
                  <a aria-controls='settings' data-toggle='tab' href='#tab4' role='tab'>
                    <i class='ic4'></i>
                    <span>Личный кабинет и трекинг система</span>
                  </a>
                </li>
                <li role='presentation'>
                  <a aria-controls='settings' data-toggle='tab' href='#tab5' role='tab'>
                    <i class='ic5'></i>
                    <span>Полный пакет официальных документов</span>
                  </a>
                </li>
              </ul>
              <div class='tab-content'>
                <div class='tab-pane active' id='tab1' role='tabpanel'>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </div>
                <div class='tab-pane' id='tab2' role='tabpanel'>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </div>
                <div class='tab-pane' id='tab3' role='tabpanel'>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </div>
                <div class='tab-pane' id='tab4' role='tabpanel'>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </div>
                <div class='tab-pane' id='tab5' role='tabpanel'>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </div>
              </div>
            </div>
            <div class='mob'>
              <dl>
                <dt class='open'>
                  <i class='ic1'></i>
                  <span>
                    Пломбировка и защитная упаковка груза
                  </span>
                </dt>
                <dd>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </dd>
                <dt>
                  <i class='ic2'></i>
                  <span>
                    Бесплатная консолидация и хранение
                  </span>
                </dt>
                <dd>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </dd>
                <dt>
                  <i class='ic3'></i>
                  <span>
                    100% страховка и ответственность за груз
                  </span>
                </dt>
                <dd>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </dd>
                <dt>
                  <i class='ic4'></i>
                  <span>
                    Личный кабинет и трекинг система
                  </span>
                </dt>
                <dd>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </dd>
                <dt>
                  <i class='ic5'></i>
                  <span>
                    Полный пакет официальных документов
                  </span>
                </dt>
                <dd>
                  <p>Поставщик отправляет вам груз частями?</p>
                  <p>Негде временно оставить его до полного сбора в единый целый?</p>
                  <p>Принимаем на хранение с полной ответственностью за груз, объединим его по вашему требованию в единую отправку.</p>
                  <p>Бесплатное хранение на срок до 7 дней.*</p>
                  <p>* - только в случае дальнейшей отправки груза через нашу компанию.</p>
                </dd>
              </dl>
            </div>
          </div>
        </div>
        <div class='homeOffre'>
          <a href=''>Акционные предложения</a>
        </div>
        <div class='actions'>
          <div class='actions-prev'></div>
          <div class='actions-next'></div>
          <div class='workCarousel'>
            <div class='item'>
              <div class='topBox'>
                <span>
                  Подарок
                  <i class='ic1'></i>
                </span>
              </div>
              <p>
                Все службы доставки работают стабильно кроме 2-х месяцев в году - декабрь (перед новым годом) и месяц во время празднования Китайского нового года. Посылка доходит до адресата приблизительно за 2 недели.
              </p>
              <a class='more' href=''>Подробнее</a>
            </div>
            <div class='item'>
              <div class='topBox'>
                <span>
                  Скидка
                  <strong>
                    3
                    <div class='p'>%</div>
                  </strong>
                </span>
              </div>
              <p>
                Посылка доходит до адресата приблизительно за 2 недели. Летом быстрее - за неделю. Все службы доставки работают стабильно кроме 2-х месяцев в году - декабрь (перед новым годом) и месяц во время празднования
              </p>
              <a class='more' href=''>Подробнее</a>
            </div>
          </div>
        </div>
        <div class='howWeWork'>
          <h2>Как мы работаем</h2>
          <span class='sub'>Четыре простых шага</span>
          <ul class='list'>
            <li>
              <div class='letter'>1</div>
              <i class='ic1'></i>
              <div class='body'>
                <p>
                  Зарегистрируйтесь на сайте
                  или
                  <a href=''>закажите звонок</a>
                </p>
              </div>
              <a class='bnt' data-target='#registration' data-toggle='modal'>Регистрироваться</a>
            </li>
            <li>
              <div class='letter'>2</div>
              <i class='ic2'></i>
              <div class='body'>
                <p>
                  Оставьте заявку.
                  Мы свяжется с вами для уточнения подробностей
                </p>
              </div>
            </li>
            <li>
              <div class='letter'>3</div>
              <i class='ic3'></i>
              <div class='body'>
                <p>
                  Мы забираем груз, упаковываем, готовим документы на отправку, доставляем на таможенный пост, производим 100% таможенную очистку
                </p>
              </div>
            </li>
            <li>
              <div class='letter'>4</div>
              <i class='ic4'></i>
              <div class='body'>
                <p>
                  Вам остается только получить груз!
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class='newsBlock'>
          <h2>
            <span>Новости компании</span>
          </h2>
          <ul class='list'>
            <li>
              <a class='img' href=''>
                <img alt='' src='img/h-img1.jpg'>
              </a>
              <div class='date'>
                <div class='day'>23</div>
                <div class='info'>
                  <div class='month'>Августа</div>
                  <div class='time'>12:55</div>
                </div>
              </div>
              <h3>
                <a href=''>В каждой шутке есть доля шутки, или Кто обидел бурятских</a>
              </h3>
              <p>
                Во вторник, 17 февраля, Антимонопольная служба в Бурятии будет рассматривать спор, который можно с полным правом назвать казусом. Однако таможенники
              </p>
            </li>
            <li>
              <a class='img' href=''>
                <img alt='' src='img/h-img2.jpg'>
              </a>
              <div class='date'>
                <div class='day'>22</div>
                <div class='info'>
                  <div class='month'>Августа</div>
                  <div class='time'>12:55</div>
                </div>
              </div>
              <h3>
                <a href=''>Границу с Абхазией сотрут с лица земли. Может быть</a>
              </h3>
              <p>
                По крайне мере, такое предложение высказал помощник Президента России Владислав Сурков. По словам чиновника, граница эта на самом деле условная, а в реальности ее
              </p>
            </li>
            <li>
              <a href="#"><img src="img/banner.jpg"/></a>
            </li>
          </ul>
        </div>
        <div class='newsBlock'>
          <h2>
            <span>Новости мира перевозок</span>
          </h2>
          <ul class='list'>
            <li>
              <a class='img' href=''>
                <img alt='' src='img/h-img4.jpg'>
              </a>
              <div class='date'>
                <div class='day'>23</div>
                <div class='info'>
                  <div class='month'>Августа</div>
                  <div class='time'>12:55</div>
                </div>
              </div>
              <h3>
                <a href=''>В каждой шутке есть доля шутки, или Кто обидел бурятских</a>
              </h3>
              <p>
                Во вторник, 17 февраля, Антимонопольная служба в Бурятии будет рассматривать спор, который можно с полным правом назвать казусом. Однако таможенники
              </p>
            </li>
            <li>
              <a class='img' href=''>
                <img alt='' src='img/h-img5.jpg'>
              </a>
              <div class='date'>
                <div class='day'>22</div>
                <div class='info'>
                  <div class='month'>Августа</div>
                  <div class='time'>12:55</div>
                </div>
              </div>
              <h3>
                <a href=''>Границу с Абхазией сотрут с лица земли. Может быть</a>
              </h3>
              <p>
                По крайне мере, такое предложение высказал помощник Президента России Владислав Сурков. По словам чиновника, граница эта на самом деле условная, а в реальности ее
              </p>
            </li>
            <li>
              <a class='img' href=''>
                <img alt='' src='img/h-img3.jpg'>
              </a>
              <div class='date'>
                <div class='day'>18</div>
                <div class='info'>
                  <div class='month'>Августа</div>
                  <div class='time'>12:55</div>
                </div>
              </div>
              <h3>
                <a href=''>С 18 февраля границы Китая закрыты</a>
              </h3>
              <p>
                Но с одним уточнением: всего на неделю. Национальный Праздник Весны традиционно начинается в Поднебесной с того, что блокируется движение через все пропускные
              </p>
            </li>
          </ul>
        </div>
        <a class='homeAllNews' href=''>Все новости</a>
        <div class='homeOffre part'>
          <span>Партнеры и клиенты</span>
        </div>
        <div class='homeLogoBlock'>
          <div class='logoCarusel'>
            <div class='item'>
              <a href=''>
                <img alt='' src='img/logos/l1.jpg'>
              </a>
            </div>
            <div class='item'>
              <a href=''>
                <img alt='' src='img/logos/l2.jpg'>
              </a>
            </div>
            <div class='item'>
              <a href=''>
                <img alt='' src='img/logos/l3.jpg'>
              </a>
            </div>
            <div class='item'>
              <a href=''>
                <img alt='' src='img/logos/l4.jpg'>
              </a>
            </div>
            <div class='item'>
              <a href=''>
                <img alt='' src='img/logos/l5.jpg'>
              </a>
            </div>
            <div class='item'>
              <a href=''>
                <img alt='' src='img/logos/l6.jpg'>
              </a>
            </div>
            <div class='item'>
              <a href=''>
                <img alt='' src='img/logos/l7.jpg'>
              </a>
            </div>
            <div class='item'>
              <a href=''>
                <img alt='' src='img/logos/l1.jpg'>
              </a>
            </div>
          </div>
        </div>
        <div class='homeFeedBack'>
          <div class='homeFeedBackIn'>
            <h2>Отзывы</h2>
            <span class='sub'>нам доверяют миллионы</span>
            <div class='feedBackCarusel'>
              <div class='item'>
                <strong>“</strong>
                <p>
                  Cотрудничество с нашей компанией, дает возможность, получить полный комплекс услуг по грузоперевозкам, таможенной очистке, сертификации, логистике из Китая, Гонконга, США, Европы, в любую точку России, Украины, Беларуси и Казахстана. Мы возим грузы любого объёма и размера от 1 кг до 40-ка футового «high cube» контейнера (увеличенной вместимости), ограничений по характеру и
                </p>
                <div class='bottBlock'>
                  <img alt='' src='img/feed-logo1.png'>
                  <div class='info'>
                    <h4>Транспортная компания Corcel</h4>
                    <p>
                      международные транспортные перевозки комплектных и сборных грузов.
                    </p>
                  </div>
                </div>
              </div>
              <div class='item'>
                <strong>“</strong>
                <p>
                  Цены приятно удивят всех – гибкая система скидок, специальные предложения и оптимальное сочетание «цена-качество» выгодно выделяют услуги грузоперевозок компании Карго СССР 80 среди других предприятий такого профиля. Уникальная тарификация делает сотрудничество с нами выгодным как для крупных компаний, так и для владельцев малого бизнеса.
                </p>
                <div class='bottBlock'>
                  <img alt='' src='img/feed-logo2.png'>
                  <div class='info'>
                    <h4>IDS Borjomi International</h4>
                    <p>
                      Международная компания IDS Borjomi International - крупнейший производитель природной минеральной воды, лидер в категории природных бутылированных вод в СНГ и странах Балтии.
                    </p>
                  </div>
                </div>
              </div>
              <div class='item'>
                <strong>“</strong>
                <p>
                  Cотрудничество с нашей компанией, дает возможность, получить полный комплекс услуг по грузоперевозкам, таможенной очистке, сертификации, логистике из Китая, Гонконга, США, Европы, в любую точку России, Украины, Беларуси и Казахстана. Мы возим грузы любого объёма и размера от 1 кг до 40-ка футового «high cube» контейнера (увеличенной вместимости), ограничений по характеру и
                </p>
                <div class='bottBlock'>
                  <img alt='' src='img/feed-logo1.png'>
                  <div class='info'>
                    <h4>Транспортная компания Corcel</h4>
                    <p>
                      международные транспортные перевозки комплектных и сборных грузов.
                    </p>
                  </div>
                </div>
              </div>
              <div class='item'>
                <strong>“</strong>
                <p>
                  Цены приятно удивят всех – гибкая система скидок, специальные предложения и оптимальное сочетание «цена-качество» выгодно выделяют услуги грузоперевозок компании Карго СССР 80 среди других предприятий такого профиля. Уникальная тарификация делает сотрудничество с нами выгодным как для крупных компаний, так и для владельцев малого бизнеса.
                </p>
                <div class='bottBlock'>
                  <img alt='' src='img/feed-logo2.png'>
                  <div class='info'>
                    <h4>IDS Borjomi International</h4>
                    <p>
                      Международная компания IDS Borjomi International - крупнейший производитель природной минеральной воды, лидер в категории природных бутылированных вод в СНГ и странах Балтии.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class='footerIn'>
          <div class='row'>
            <div class='col-sm-3'>
              <ul class='footMenu'>
                <li>
                  <a href=''>Тарифы</a>
                </li>
                <li>
                  <a href=''>О компании</a>
                </li>
                <li>
                  <a href=''>Условия</a>
                </li>
                <li>
                  <a href=''>Услуги</a>
                </li>
                <li>
                  <a href=''>Страны</a>
                </li>
                <li>
                  <a href=''>Контакты</a>
                </li>
                <li>
                  <a href=''>Отследить груз</a>
                </li>
              </ul>
            </div>
            <div class='col-sm-5'>
              <div class='contactBox'>
                <div class='combo'>
                  <select>
                    <option value='5'>Украина</option>
                    <option value='6'>Украина2</option>
                    <option value='7'>Украина3</option>
                  </select>
                </div>
                <div class='tell'>
                  +38 (044) 361-53-64
                  <span>Киев</span>
                </div>
                <div class='tell'>
                  +38 (098) 351-51-49
                  <span>Одесса</span>
                </div>
                <div class='adddress'>Одесса, ул.Базовая 27</div>
                <a class='bnt' data-target='#feedback' data-toggle='modal'>Заказать звонок</a>
              </div>
            </div>
            <div class='col-sm-4'>
              <form>
                <input placeholder='Поиск по сайту' type='text'>
                <input type='submit' value=''>
              </form>
              <div class='card'>
                <a href=''>
                  <img alt='' src='img/visa.png'>
                </a>
                <a href=''>
                  <img alt='' src='img/master.png'>
                </a>
              </div>
              <div class='dev hidden-sm hidden-xs'>
                <span>Сайт разработан:</span>
                <a class='footLogo' href=''>
                  <img alt='' src='img/foot-logo.png'>
                </a>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              <ul class='soc'>
                <li>
                  <a class='ic1' href=''></a>
                </li>
                <li>
                  <a class='ic2' href=''></a>
                </li>
                <li>
                  <a class='ic3' href=''></a>
                </li>
                <li>
                  <a class='ic4' href=''></a>
                </li>
                <li>
                  <a class='ic5' href=''></a>
                </li>
              </ul>
              <div class='copy'>
                © Логистическая компания «Migoff», 2015
              </div>
            </div>
          </div>
          <div class='row hidden-lg hidden-md'>
            <div class='col-sm-12'>
              <div class='dev'>
                <span>Сайт разработан:</span>
                <a class='footLogo' href=''>
                  <img alt='' src='img/foot-logo.png'>
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class='modal fade' id='popupLogin' role='dialog' tabindex='-1'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
              <span aria-hidden='true'></span>
            </button>
            <h4 class='modal-title'>Вход</h4>
          </div>
          <div class='modal-body form'>
            <form>
              <div class='line'>
                <label>
                  Логин
                </label>
                <div class='input'>
                  <input placeholder='mail@mail.com' type='text'>
                </div>
              </div>
              <div class='line'>
                <label>
                  Пароль
                </label>
                <div class='input'>
                  <input placeholder='********' type='password'>
                </div>
              </div>
              <button class='btn dark' type='submit'>Войти</button>
              <div class='forgot'>
                <a data-dismiss='modal'>Напомнить пароль</a>
              </div>
              <div class='regBtnBox' id='registrationBtn'>
                <a class='btn red' data-dismiss='modal'>Регистрироваться</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class='modal fade' id='popupForgot' role='dialog' tabindex='-1'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
              <span aria-hidden='true'></span>
            </button>
            <h4 class='modal-title'>Вход</h4>
          </div>
          <div class='modal-body form'>
            <form>
              <div class='line'>
                <label>
                  Логин
                </label>
                <div class='input'>
                  <input placeholder='mail@mail.com' type='text'>
                </div>
              </div>
              <button class='btn dark' type='submit'>Выслать</button>
              <div class='backToLogin'>
                <a data-dismiss='modal'>вернутся на форму входа</a>
              </div>
              <div class='regBtnBox' id='registrationBtn2'>
                <a class='btn red' data-dismiss='modal'>Регистрироваться</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class='modal fade' id='registration' role='dialog' tabindex='-1'>
      <div class='modal-dialog ezCustTrans' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
              <span aria-hidden='true'></span>
            </button>
            <h4 class='modal-title red'>Регистрация</h4>
          </div>
          <div class='modal-body form'>
            <form>
              <p>
                И присвоение индивидуального транспортного кода получателя груза.
              </p>
              <div class='tabBtn open'>
                Обязательные данные получателя груза
              </div>
              <div class='tabBody'>
                <div class='line'>
                  <label>
                    Фамилия
                    <span>*</span>
                  </label>
                  <div class='input'>
                    <input placeholder='mail@mail.com' type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>
                    Имя
                    <span>*</span>
                  </label>
                  <div class='input'>
                    <input placeholder='Piter' type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>
                    Отчество
                    <span>*</span>
                  </label>
                  <div class='input'>
                    <input placeholder='' type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>
                    Страна получения
                    <span>*</span>
                  </label>
                  <div class='input'>
                    <input placeholder='' type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>
                    Город получения
                    <span>*</span>
                  </label>
                  <div class='input'>
                    <input placeholder='' type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>
                    E-mail
                    <span>*</span>
                  </label>
                  <div class='input'>
                    <input placeholder='' type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>
                    Контактный
                    <span>*</span>
                  </label>
                  <div class='input'>
                    <input placeholder='' type='text'>
                  </div>
                </div>
              </div>
              <div class='tabBtn'>
                Дополнительные данные
              </div>
              <div class='tabBody'>
                <div class='line inline'>
                  <label>Компания</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>URL</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
                <div class='line inline'>
                  <label>Адрес получателя</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>Индекс</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
                <div class='line inline'>
                  <label>Skype</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>QQ</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>Паспорт</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>Дата выдачи</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>Телефон отправителя</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
                <div class='line'>
                  <label>Примечания</label>
                  <div class='input'>
                    <input type='text'>
                  </div>
                </div>
              </div>
              <div class='bottBlock'>
                <div class='labelCheck'>
                  <label>
                    <input type='checkbox'>
                    <span></span>
                  </label>
                  <a href=''>Принимаю договор оферты</a>
                </div>
                <button class='btn red' type='submit'>Регистрироваться и получить код</button>
                <div class='alredyReg'>
                  <a data-dismiss='modal'>Уже зарегистрированы</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class='modal fade' id='feedback' role='dialog' tabindex='-1'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
              <span aria-hidden='true'></span>
            </button>
            <h4 class='modal-title'>Форма обратной связи</h4>
          </div>
          <div class='modal-body form'>
            <form>
              <div class='line'>
                <label>
                  Имя
                </label>
                <div class='input'>
                  <input placeholder='Иван' type='text'>
                </div>
              </div>
              <div class='line'>
                <label>
                  E-mail
                </label>
                <div class='input'>
                  <input placeholder='mail@mail.com' type='text'>
                </div>
              </div>
              <div class='line textarea'>
                <label>
                  Сообщение
                </label>
                <div class='input textarea'>
                  <textarea></textarea>
                </div>
              </div>
              <div class='atach'>
                <p>
                  Вы можете приложить дополнительную информацию о вашем грузе
                </p>
                <div class='fileBlock'>
                  <a>Обзор_</a>
                  <input type='file'>
                  <span>Файл не выбран</span>
                </div>
              </div>
              <button class='btn red' type='submit'>Отправить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class='modal fade' id='thanks' role='dialog' tabindex='-1'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
              <span aria-hidden='true'></span>
            </button>
            <h4 class='modal-title red'>Благодарим за запрос!</h4>
          </div>
          <div class='modal-body form'>
            <i></i>
            <p>
              Вам на почту отправлен общий прайс-лист, в течении 24-х часов ожидайте индивидуальный расчет.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class='modal fade' id='code' role='dialog' tabindex='-1'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
              <span aria-hidden='true'></span>
            </button>
            <h4 class='modal-title'>Поиск информации о посылках</h4>
          </div>
          <div class='modal-body form'>
            <form>
              <div class='line'>
                <label>Введите код посылки</label>
                <div class='input'>
                  <input placeholder='WERY12982734' type='text'>
                </div>
              </div>
              <button class='btn red' type='submit'>Найти</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class='modal fade' id='calc' role='dialog' tabindex='-1'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
              <span aria-hidden='true'></span>
            </button>
            <h4 class='modal-title'>Рассчитать стоимость доставки</h4>
          </div>
          <div class='modal-body calc shippingCosts'>
            <form>
              <div class='popupCalc'>
                <div class='box'>
                  <h3>Параметры доставки</h3>
                  <div class='table'>
                    <a class='arr' href=''></a>
                    <table>
                      <tr>
                        <td>
                          <label>
                            Откуда
                            <span>*</span>
                          </label>
                        </td>
                        <td>
                          <div class='select'>
                            <div class='combo'>
                              <select>
                                <option value='5'>Китай</option>
                                <option value='5'>Китай2</option>
                                <option value='5'>Китай3</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            Куда
                            <span>*</span>
                          </label>
                        </td>
                        <td>
                          <div class='select'>
                            <div class='combo'>
                              <select>
                                <option value='5'>Россия</option>
                                <option value='5'>Россия2</option>
                                <option value='5'>Россия3</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            Тариф
                            <span>*</span>
                          </label>
                        </td>
                        <td>
                          <div class='select'>
                            <div class='combo'>
                              <select>
                                <option value='5'>Авто/Авиа бюджет</option>
                                <option value='5'>Авто/Авиа бюджет2</option>
                                <option value='5'>Авто/Авиа бюджет3</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class='box'>
                  <h3>Характеристики груза</h3>
                  <div class='table'>
                    <a class='arr' href=''></a>
                    <table>
                      <tr>
                        <td>
                          <label>Тип</label>
                        </td>
                        <td>
                          <div class='select'>
                            <div class='combo'>
                              <select>
                                <option value='5'>Видеорегистраторы</option>
                                <option value='5'>Видеорегистраторы2</option>
                                <option value='5'>Видеорегистраторы3</option>
                              </select>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Вес</label>
                        </td>
                        <td>
                          <div class='select'>
                            <input class='input' type='text' value='87'>
                            <span>кг</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Стоимость</label>
                        </td>
                        <td>
                          <div class='select'>
                            <input class='input' type='text' value='540'>
                            <span>USD</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            Объем
                            <i></i>
                          </label>
                        </td>
                        <td>
                          <div class='select'>
                            <input class='input' type='text' value='0,564'>
                            <span>
                              см
                              <sup>3</sup>
                            </span>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class='box'>
                  <h3>Сроки и Стоимость доставки</h3>
                  <div class='delivery'>
                    <i></i>
                    <a>Рассчитать доставку</a>
                  </div>                  
                  <div class='table'>
                    <table>
                      <tr>
                        <td>
                          <label>Сроки доставки</label>
                        </td>
                        <td>
                          <strong>20-25</strong>
                          <span>Дней</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Стоимость</label>
                        </td>
                        <td>
                          <strong>2450</strong>
                          <span>USD</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            Страховка
                            <i></i>
                          </label>
                        </td>
                        <td>
                          <strong>250</strong>
                          <span>USD</span>
                        </td>
                      </tr>
                      <tr>
                        <td colspan='2'>
                          <div class='end'>
                            <label>Итого</label>
                            <strong>295</strong>
                            <span>USD</span>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class='exchangeRates'>
                <div class='row'>
                  <div class='col-md-6'>
                    <div class='leftBlok'>
                      <div class='left'>
                        <label>Курс валют</label>
                        <div class='combo'>
                          <select>
                            <option>1USD</option>
                            <option>1USD</option>
                            <option>1USD</option>
                          </select>
                        </div>
                      </div>
                      <div class='info'>
                        <table>
                          <tr>
                            <td>0.92</td>
                            <td>24.80</td>
                            <td>58.86</td>
                          </tr>
                          <tr>
                            <td>
                              0.91
                              <span>EUR</span>
                            </td>
                            <td>
                              23.50
                              <span>ГРН</span>
                            </td>
                            <td>
                              56.86
                              <span>РУБ</span>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='rightBlok'>
                      <div class='left'>
                        <label>
                          Конвертер
                          <br>
                          валют
                        </label>
                      </div>
                      <div class='info'>
                        <table>
                          <tr>
                            <td>
                              <div class='input'>
                                <input type='text' value='295'>
                              </div>
                              <span>USD</span>
                            </td>
                            <td>
                              <div class='input'>
                                <input type='text' value='272.86'>
                              </div>
                              <span>EUR</span>
                            </td>
                            <td>
                              <div class='input'>
                                <input type='text' value='6 932.53'>
                              </div>
                              <span>ГРН</span>
                            </td>
                            <td>
                              <div class='input'>
                                <input type='text' value='16 774.70'>
                              </div>
                              <span>РУБ</span>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='btnBox'>
                <button class='btn red' type='submit'>заказать доставку груза</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
