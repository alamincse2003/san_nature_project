@extends('frontend.layouts.master')
@section('title','Team Page')
@section('team','active')
@section('content')
    <section class="our_team_member">
        @php
            $teams = App\Models\Team::where('status', 'active')->orderBy('order')->get()->all();
            $tabs = App\Models\Tab::where('status', 'active')->get()->all();
        @endphp
        @foreach ($tabs as $tab)
            <div class="container">
                <div class="principale_massage_title">
                    <h2 class="mt-5">{{ $tab->title }}</h2>
                </div>

                <div class="row">
                    @foreach ($teams as $team)
                        @if ($team->tab_id == $tab->id)
                            @if ($team->position == 'top')
                                <div class="col-lg-4 mx-auto">
                                    <div class="flipcard">
                                        <div class="face face-front shadow-lg p-3 mb-5 bg-body rounded">
                                            <div class="member_image">
                                                <img src="{{ asset('images/teams/' . $team->image) }}">
                                            </div>
                                            <div class="teacher_info">
                                                <h5>{{ $team->title }}</h5>
                                                @if ($team->job_experience)
                                                    <p>
                                                        {{ $team->job_experience }}
                                                    </p>
                                                @endif
                                                <p>{{ $team->designation }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                    <div class="common_teaching_team">
                        <div class="row">
                            @foreach ($teams as $team)
                                @if ($team->tab_id == $tab->id)
                                    @if ($team->position == 'bottom')
                                        <div class="col-lg-4">
                                            <div class="flipcard">
                                                <div class="face face-front shadow-lg p-3 mb-5 bg-body rounded">
                                                    <div class="member_image">
                                                        <img src="{{ asset('images/teams/' . $team->image) }}">
                                                    </div>
                                                    <div class="teacher_info">
                                                        <h5>{{ $team->title }}</h5>
                                                        @if ($team->job_experience)
                                                            <p>
                                                                {{ $team->job_experience }}
                                                            </p>
                                                        @endif
                                                        <p>{{ $team->designation }}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

        {{-- @endforeach --}}
    </section>
    {{-- @endforeach --}}
    <!-- Our team meeting end -->
    {{-- <section class="container">
        @php
            $team = App\Models\Team::get()->first();
        @endphp
        <h1 class="text-center">{{ $team->title }}</h1>

        <div>
            <iframe src="{{ asset('images/teams/' . $team->pdf) }}" height="600px" width="100%" frameborder="0"></iframe>
        </div>
    </section> --}}
@endsection
