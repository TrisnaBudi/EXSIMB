@extends('layouts.default')
@section('content')
<div id="page" class="site">
  <main id="content" class="site-content">
    <article id="post-22" class="post-22 screen type-screen status-publish hentry condition-depression">
      <div class="wrap normal">
        <div class="page-heading plain">
          <h1 class="entry-title">Diagnosa Tingkat Kerusakan</h1>
        </div>
      </div>
      <div class="wrap medium">
        <div class="page-intro">
          <div class="gf_browser_safari gform_wrapper gform_legacy_markup_wrapper" id="gform_wrapper_1" style="display:none;">
            <div class="gform_heading">
              <h3 class="gform_title">Diagnosa Kerusakan</h3>
              <span class="gform_description"></span>
            </div>
            <form method="post" enctype="multipart/form-data" id="gform_1" action="{{ route('spk.store') }}" novalidate>
              @csrf
              <ol class="screen-progress-bar clearfix step-2-of-3">
                <li class="step-1"><span>Informasi<br />Tes</span></li>
                <li class="step-2"><span>Pertanyaan<br />Tes</span></li>
                <li class="step-3"><span>Hasil<br />Anda</span></li>
              </ol>
              <div class="gform_body gform-body">
                <div id="gform_page_1_1" class="gform_page">
                  <div class="gform_page_fields">
                    <ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_above">
                      <li id="field_1_4" class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_1_4">
                        <p><strong>Apa saja gejala yang anda alami ?</strong></p>
                        <p>Tidak semua field harus diisi, jadi pastikan untuk memberikan jawaban yang tepat sesuai dengan pengalamanmu.</p>
                      </li>
                      <li id="field_1_38" class="gfield gform_hidden field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_1_38">
                        <div class="ginput_container ginput_container_text">
                          <input name="input_38" id="input_1_38" type="hidden" class="gform_hidden" aria-invalid="false" value="">
                        </div>
                      </li>
                      <li id="field_1_39" class="gfield gform_hidden field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_1_39">
                        <input name="input_39" id="input_1_39" type="hidden" class="gform_hidden" aria-invalid="false" value="22">
                      </li>
                      <li id="field_1_40" class="gfield gform_hidden field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_1_40">
                        <input name="input_40" id="input_1_40" type="hidden" class="gform_hidden" aria-invalid="false" value="7878e1122b99483fc88d5dbe4c974e93">
                      </li>
                      <li id="field_1_41" class="gfield gform_hidden field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_1_41">
                        <div class="ginput_container ginput_container_text">
                          <input name="input_41" id="input_1_41" type="hidden" class="gform_hidden" aria-invalid="false" value="">
                        </div>
                      </li>
                      <li id="field_1_47" class="gfield gform_hidden field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_1_47">
                        <div class="ginput_container ginput_container_text">
                          <input name="input_47" id="input_1_47" type="hidden" class="gform_hidden" aria-invalid="false" value="">
                        </div>
                      </li>
                      <li id="field_1_58" class="gfield gform_hidden field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_1_58">
                        <div class="ginput_container ginput_container_text">
                          <input name="input_58" id="input_1_58" type="hidden" class="gform_hidden" aria-invalid="false" value="">
                        </div>
                      </li>
                      <li id="field_1_59" class="gfield gform_hidden field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_1_59">
                        <div class="ginput_container ginput_container_text">
                          <input name="input_59" id="input_1_59" type="hidden" class="gform_hidden" aria-invalid="false" value="">
                        </div>
                      </li>
                      <li id="field_1_60" class="gfield gform_hidden field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_1_60">
                        <div class="ginput_container ginput_container_text">
                          <input name="input_60" id="input_1_60" type="hidden" class="gform_hidden" aria-invalid="false" value="">
                        </div>
                      </li>

                      @foreach($gejala as $item)
                      <li id="field_{{ $loop->iteration }}" class="gfield question gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible" data-js-reload="field_{{ $loop->iteration }}">
                        <label class="gfield_label">{{ $loop->iteration }}. Apakah anda merasa {{ $item->gejala }}?<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                        <div class="ginput_container ginput_container_radio">
                          <ul class="gfield_radio" id="input_{{ $loop->iteration }}">
                            @foreach($kondisi_user as $kondisi)
                            <li style="font-size: 14px;" class="gchoice gchoice_{{ $loop->parent->iteration }}_{{ $loop->iteration }}">
                              <input name="input_{{ $loop->parent->iteration }}" type="radio" value="{{ $kondisi->nilai }}" id="choice_{{ $loop->parent->iteration }}_{{ $loop->iteration }}" onchange="document.getElementById('kondisi_{{ $item->kode_gejala }}{{ $loop->parent->iteration }}').value = this.value">
                              <label for="choice_{{ $loop->parent->iteration }}_{{ $loop->iteration }}" id="label_{{ $loop->parent->iteration }}_{{ $loop->iteration }}">{{ $kondisi->kondisi }}</label>
                            </li>
                            @endforeach
                            <input type="hidden" name="kondisi[{{ $item->kode_gejala }}]" id="kondisi_{{ $item->kode_gejala }}{{ $loop->iteration }}" value="">
                          </ul>
                        </div>
                      </li>
                      @endforeach

                      <div class="gform_page_footer top_label">
                        <a style="align-content: flex-end" href="/form" class="gform_back_button button"> BACK</a>
                        <button type="submit" class="gform_next_button button">Submit</button>
                      </div>
                    </ul>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <p>&nbsp;</p>
          <hr />
        </div>
      </div>
    </article>
  </main>
</div>
@endsection
