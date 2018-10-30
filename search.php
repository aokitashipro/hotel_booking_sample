<div class="txt-center">

  <form class="form-inline mgb20">
    <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <!-- Trigger the modal  -->
        <label for="data_range"><i class="material-icons">date_range</i>日付</label><input placeholder="年月日 - 年月日" id="book_calender" type="text" readonly="readonly" data-toggle="modal" data-target="#myModal1">

          <!-- Modal -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog modal-lg">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="h2-responsive modal-title">YYYY/MM/DD - YYYY/MM/DD</h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <h3 class="h3-responsive">2017年11月</h3>
                  <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>月</th>
                              <th>火</th>
                              <th>水</th>
                              <th>木</th>
                              <th>金</th>
                              <th>土</th>
                              <th>日</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                              <td>5</td>
                              <td>6</td>
                              <td>7</td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>9</td>
                              <td>10</td>
                              <td>11</td>
                              <td>12</td>
                              <td>13</td>
                              <td>14</td>
                            </tr>
                            <tr>
                              <td>15</td>
                              <td>16</td>
                              <td>17</td>
                              <td>18</td>
                              <td>19</td>
                              <td>20</td>
                              <td>21</td>
                            </tr>
                            <tr>
                              <td>22</td>
                              <td>23</td>
                              <td>24</td>
                              <td>25</td>
                              <td>26</td>
                              <td>27</td>
                              <td>28</td>
                            </tr>
                            <tr>
                              <td>29</td>
                              <td>30</td>
                              <td>31</td>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                            </tr>
                          </tbody>
                  </table>
                </div>
                <div class="col-lg-6 col-md-12">
                  <h3 class="h3-responsive">2017年12月</h3>

              <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>月</th>
                          <th>火</th>
                          <th>水</th>
                          <th>木</th>
                          <th>金</th>
                          <th>土</th>
                          <th>日</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>9</td>
                          <td>10</td>
                          <td>11</td>
                          <td>12</td>
                          <td>13</td>
                          <td>14</td>
                        </tr>
                        <tr>
                          <td>15</td>
                          <td>16</td>
                          <td>17</td>
                          <td>18</td>
                          <td>19</td>
                          <td>20</td>
                          <td>21</td>
                        </tr>
                        <tr>
                          <td>22</td>
                          <td>23</td>
                          <td>24</td>
                          <td>25</td>
                          <td>26</td>
                          <td>27</td>
                          <td>28</td>
                        </tr>
                        <tr>
                          <td>29</td>
                          <td>30</td>
                          <td>31</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                        </tr>
                      </tbody>
              </table>
            </div>
        </div><!-- row -->
      </div><!-- mordal body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">決定</button>
                </div>
              </div>

            </div>
          </div>
      </div>
    </div>
    <div class="col-xs-4">

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-select_adult">
        <input class="mdl-textfield__input" placeholder="1" type="text" readonly="readonly" id="select-section_adult" />
        <label class="mdl-textfield__label" for="select_adult"><i class="material-icons">person</i>おとな 人数</label>
        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_adult">
            <li class="mdl-menu__item">1</li>
            <li class="mdl-menu__item">2</li>
            <li class="mdl-menu__item">3</li>
            <li class="mdl-menu__item">4</li>
            <li class="mdl-menu__item">5</li>
            <li class="mdl-menu__item">6</li>
            <li class="mdl-menu__item">7</li>
            <li class="mdl-menu__item">8</li>
            <li class="mdl-menu__item">9</li>
            <li class="mdl-menu__item">10</li>
          </ul>
      </div>
      </div>
      <div class="col-xs-4">
        <label for="myModal_children"><i class="material-icons">face</i>子ども人数</label>
				<input placeholder="0" id="children" type="text" readonly="readonly" data-toggle="modal" data-target="#myModal_children" style="margin-top: -12px;">
        <!-- Modal -->
        <div class="modal fade" id="myModal_children" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="h3-responsive modal-title">子ども人数</h3>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-4">小学校高学年</div>
                  <div class="col-xs-2">
                    <div class="mdl-select_children_1">
                      <input class="mdl-textfield__input" type="text" id="select-section_children_1" />
                      <label class="mdl-textfield__label" for="select_children_1"></label>
                      <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_children_1">
                          <li class="mdl-menu__item">0名</li>
                          <li class="mdl-menu__item">1名</li>
                          <li class="mdl-menu__item">2名</li>
                        </ul>
                    </div>
                  </div>
                  <div class="col-xs-4">小学校低学年</div>
                  <div class="col-xs-2">
                    <div class="mdl-select_children_2">
                      <input class="mdl-textfield__input" type="text" id="select-section_children_2" />
                      <label class="mdl-textfield__label" for="select_children_2"></label>
                      <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_children_2">
                          <li class="mdl-menu__item">0名</li>
                          <li class="mdl-menu__item">1名</li>
                          <li class="mdl-menu__item">2名</li>
                        </ul>
                    </div>
                  </div>
                </div><!-- 高学年・低学年-->

                <div class="row">
                  <div class="col-xs-4">幼児(食事・寝具あり)</div>
                  <div class="col-xs-2">
                    <div class="mdl-select_children_3">
                      <input class="mdl-textfield__input" type="text" id="select-section_children_3" />
                      <label class="mdl-textfield__label" for="select_children_3"></label>
                      <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_children_3">
                          <li class="mdl-menu__item">0名</li>
                          <li class="mdl-menu__item">1名</li>
                          <li class="mdl-menu__item">2名</li>
                        </ul>
                    </div>
                  </div>
                  <div class="col-xs-4">幼児(食事のみ)</div>
                  <div class="col-xs-2">
                    <div class="mdl-select_children_4">
                      <input class="mdl-textfield__input" type="text" id="select-section_children_4" />
                      <label class="mdl-textfield__label" for="select_children_4"></label>
                      <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_children_4">
                          <li class="mdl-menu__item">0名</li>
                          <li class="mdl-menu__item">1名</li>
                          <li class="mdl-menu__item">2名</li>
                        </ul>
                    </div>
                  </div>
                </div><!-- 幼児(食事・寝具あり)・幼児(食事のみ)-->
                <div class="row">
                  <div class="col-xs-4">幼児(寝具のみ)</div>
                  <div class="col-xs-2">
                    <div class="mdl-select_children_5">
                      <input class="mdl-textfield__input" type="text" id="select-section_children_5" />
                      <label class="mdl-textfield__label" for="select_children_5"></label>
                      <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_children_5">
                          <li class="mdl-menu__item">0名</li>
                          <li class="mdl-menu__item">1名</li>
                          <li class="mdl-menu__item">2名</li>
                        </ul>
                    </div>
                  </div>
                  <div class="col-xs-4">幼児(食事・寝具なし)</div>
                  <div class="col-xs-2">
                    <div class="mdl-select_children_6">
                      <input class="mdl-textfield__input" type="text" id="select-section_children_6" />
                      <label class="mdl-textfield__label" for="select_children_6"></label>
                      <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_children_6">
                          <li class="mdl-menu__item">0名</li>
                          <li class="mdl-menu__item">1名</li>
                          <li class="mdl-menu__item">2名</li>
                        </ul>
                    </div>
                  </div>
                </div><!-- 幼児(寝具のみ)・幼児(食事・寝具なし)-->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
              </div>
            </div>

          </div>
        </div>
				
				
        </div>

    <div class="col-xs-4">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-select_room">
        <input class="mdl-textfield__input" placeholder="1" type="text" readonly="readonly" id="select-section_room" />
        <label class="mdl-textfield__label" for="select_room"><i class="material-icons">hotel</i>室数</label>
        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="select-section_room">
            <li class="mdl-menu__item">1</li>
            <li class="mdl-menu__item">2</li>
            <li class="mdl-menu__item">3</li>
            <li class="mdl-menu__item">4</li>
            <li class="mdl-menu__item">5</li>
          </ul>
      </div>
    </div>
  </div>
    <button type="submit" class="btn btn-default btn-lg"><i class="material-icons">search</i>検索</button>
  </form>
</div>
