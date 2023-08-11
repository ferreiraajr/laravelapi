@extends('layout')


<div class="container">

    <div class="card  ">
        <h2 class="justify-center">Consumindo API </h2>

        <div class="row">
            <a href="{{route('apigithub.index')}}" style="text-decoration: none; color: #4b5563">
            <div class="card ">

                <h4>API GITHUB</h4>

            </div>
            </a>

            <a href="{{route('apiviacep.index')}}" style="text-decoration: none; color: #4b5563">
                <div class="card">

                    <h4 >API VIACEP</h4>
                </div>
            </a>

        </div>

    </div>

</div>
