@extends('layouts.front-end')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <img src="{{ asset('img/puzzle.jpg') }}" style="height:400px; width:100%; border-top-right-radius: 6px; border-top-left-radius: 6px;" alt="Alternate Text" />
        </div>
    </div>

    <div style="margin-bottom: -22px;" class="row">
        <div class="col-sm-12">
            <div style="border-radius:0px; border: 0px;" class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">

                        @if(Session::has('class') && Session::has('message'))
                            <div class="{{ Session::get('class') }}">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <h2>Help de regering!</h2>

                        <p>
                            Ach en ach, alweer een gat in de begroting! Wat sneu voor onze
                            lieve regering die van een evenwicht haar prioriteit had gemaakt…
                        </p>

                        <p>
                            Wat nu? Nog meer besparen op kap van de middenklasse?
                            Terwijl het gebrek aan consumptie mee aan de basis ligt van het deficit?
                            Meer bezuinigen bij werklozen, langdurig zieken en gepensioneerden terwijl onze levensverwachting voor het eerst sinds mensenheugnis daalt?
                        </p>

                        <h2>We dragen een steentje bij!</h2>

                        <p>
                            Na veel denkwerk, zetten we een steunactie op om onze lieve regering te helpen bij het begrotingswerk.
                            Ze kunnen het duidelijk niet alleen, dus moeten alle burgers helpen.
                            Hoe? Zeer eenvoudig: zoek het geld waar het is. Namelijk in de rechterkolom.
                            Daar kan u een bron kiezen en vervolgens een bedrag invullen. Als we allemaal samen een steentje bijdragen,
                            komen we makkelijk aan de nodige 4,2 miljard.
                        </p>

                        <hr>

                        {{-- Subscription form --}}
                        <form action="{{ route('insert') }}" method="POST" class="form-horizontal">
                            {{-- CSRF token --}}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('voornaam') ? ' has-error' : '' }} {{ $errors->has('achternaam') ? ' has-error' : '' }}">
                                <label for="firstname" class="control-label col-sm-2">
                                    Naam: <span class="text-danger">*</span>
                                </label>

                                <div class="col-md-3">
                                    <input type="text" name="voornaam" placeholder="voornaam" class="form-control input-sm" />
                                </div>

                                <div class="col-md-3">
                                    <input type="text" name="achternaam" placeholder="achternaam" class="form-control input-sm" />
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('geboortedatum') ? ' has-error' : '' }}">
                                <label for="geboorte" class="control-label col-sm-2">
                                    Geboorte: <span class="text-danger">*</span>
                                </label>

                                <div class="col-sm-6">
                                    <input type="date" name="geboortedatum" class="form-control input-sm" />
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label col-sm-2">
                                    Email adres: <span class="text-danger">*</span>
                                </label>

                                <div class="col-sm-6">
                                    <input type="email" name="email" placeholder="Uw email adres" class="form-control input-sm" />
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('bron') ? ' has-error' : '' }} {{ $errors->has('bedrag') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2">
                                    Vonst: <span class="text-danger">*</span>
                                </label>

                                <div class="col-sm-3">
                                    <select name="bron" class="form-control input-sm" id="">
                                        <option value="">-- BRON --</option>
                                        @foreach($items as $item)
                                            <option value="{{ $item->leak }}"> {{ $item->leak }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select name="bedrag" class="form-control input-sm" id="">
                                        <option value="">-- BEDRAG --</option>

                                        @foreach($amounts as $amount)
                                            <option value="{{ $amount->amount }}"> {{ $amount->amount }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2">
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success btn-sm">Insturen</button>
                                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- /Subscription form --}}
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Gevonden bedrag:

                                <div class="pull-right">
                                    {{ $total }}€
                                </div>
                            </div>

                            <ul class="list-group">
                                <li class="list-group-item">
                                    Lux leaks

                                    <span class="pull-right">{{ $count_1 }}€</span>
                                </li>
                                <li class="list-group-item">
                                    Swiss leaks

                                    <span class="pull-right">{{ $count_2 }}€</span>
                                </li>
                                <li class="list-group-item">
                                    Panama Papers

                                    <span class="pull-right">{{ $count_3 }}€</span>
                                </li>
                                <li class="list-group-item">
                                    Bahama Leaks

                                    <span class="pull-right">{{ $count_4 }}€</span>
                                </li>
                                <li class="list-group-item">
                                    Rijkentaks

                                    <span class="pull-right">{{ $count_5 }}€</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-bs">
        <div class="row">
            <div class="col-md-10 footer-brand animated fadeInLeft">
                <h2>Over red de begroting.</h2>
                <p>
                    Naar aanleiding van het tekort in de begroting van 4.2 miljard euro , Gaan wij burgers met deze actie die ook een petitie vormt de regering helpen om het bedrag aan te vullen.
                </p>

                <p>&copy; 2015 - {{ date('Y') }} Tom Manheaghe en Tim Joosten</p>
            </div>
            <div class="col-md-2 footer-social animated fadeInDown">
                <h4>Contact</h4>
                <ul>
                    <li><a href="https://www.facebook.com/ActivismeTomManhaeghe/">Facebook</a></li>
                    <li><a href="mailto:tom@homeplace.be">Email</a></li>
                </ul>
            </div>
        </div>
    </footer>
@endsection

