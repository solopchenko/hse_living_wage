@extends('layouts.app')

@section('title', 'Просмотр обращений')

@section('content')

    <!--<div class="section">
        <div class="row">
            <div class="col-md-12">
                <h2>Выберите регион</h2>
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Ваше имя" class="form-control input-lg text-center" />
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Ваш регион" class="form-control input-lg text-center" />
                    </div>

                    <p><button type="submit" class="btn btn-primary">Начать</button></p>
                </form>
            </div>
        </div>
    </div>-->

    <div class="section">

        <div id="foodstuff">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>Продовольственные товары</h2>
                    <h5>Продовольственные товары являются...</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Наименование</th>
                                <th>Количество</th>
                                <th>Стоиомсть единицы</th>
                                <th>Сумма</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-left">
                                <td>1</td>
                                <td>Макароны</td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>534&nbsp;&#8381;</td>
                            </tr>
                            <tr class="text-left">
                                <td>1</td>
                                <td>Макароны</td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>534&nbsp;&#8381;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="non-foodstuff">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>Непродовольственные товары</h2>
                    <h5>Непродовольственные товары являются...</h5>
                    <div class="togglebutton">
                        <label>
                            <input type="checkbox" name="optionsCheckboxes">
                            Рассчитывать согласно действующему законодательству
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Наименование</th>
                                <th>Количество</th>
                                <th>Стоиомсть единицы</th>
                                <th>Сумма</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-left">
                                <td>1</td>
                                <td>Макароны</td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>534&nbsp;&#8381;</td>
                            </tr>
                            <tr class="text-left">
                                <td>1</td>
                                <td>Макароны</td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>534&nbsp;&#8381;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="services">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>Услуги</h2>
                    <h5>Услуги являются...</h5>
                    <div class="togglebutton">
                        <label>
                            <input type="checkbox" name="optionsCheckboxes">
                            Рассчитывать согласно действующему законодательству
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Наименование</th>
                                <th>Количество</th>
                                <th>Стоиомсть единицы</th>
                                <th>Сумма</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-left">
                                <td>1</td>
                                <td>Макароны</td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>534&nbsp;&#8381;</td>
                            </tr>
                            <tr class="text-left">
                                <td>1</td>
                                <td>Макароны</td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group form-table">
                                        <input type="text" value="" placeholder="Количество" class="form-control"/>
                                    </div>
                                </td>
                                <td>534&nbsp;&#8381;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="text-center"><button class="btn btn-lg btn-success">Рассчитать</button></p>
            </div>
        </div>

    </div>


@stop