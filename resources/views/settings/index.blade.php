@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ trans('general.admin') }}
@parent
@stop

{{-- Page content --}}
@section('content')



  <div class="row">

    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.branding.index') }}" class="btn btn-lg btn-white"><i class="fa fa-copyright fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.brand') }}
          <p class="help-block">{{ trans('admin/settings/general.Logo, Site Name') }}</p>
        </div>
      </div>
    </div>


    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.general.index') }}" class="btn btn-lg btn-white"><i class="fa fa-wrench fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.general_settings') }}
          <p class="help-block"> {{ trans('admin/settings/general.Default EULA and more') }}</p>
        </div>
      </div>
    </div>


    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.security.index') }}" class="btn btn-lg btn-white"><i class="fa fa-lock fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Security') }}
          <p class="help-block">{{ trans('admin/settings/general.Two-factor, Password Restrictions') }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('groups.index') }}" class="btn btn-lg btn-white"><i class="fa fa-group fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Groups') }}
          <p class="help-block">{{ trans('admin/settings/general.Account permission groups') }}</p>
        </div>
      </div>
    </div>


    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.localization.index') }}" class="btn btn-lg btn-white"><i class="fa fa-globe fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Localization') }}
          <p class="help-block">{{ trans('admin/settings/general.Language, date display') }}</p>

        </div>
      </div>
    </div>


    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.alerts.index') }}" class="btn btn-lg btn-white"><i class="fa fa-bell fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Notifications') }}
          <p class="help-block">{{ trans('admin/settings/general.Email alerts') }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.slack.index') }}" class="btn btn-lg btn-white"><i class="fa fa-slack fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Slack') }}
          <p class="help-block">{{ trans('admin/settings/general.Slack settings') }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.asset_tags.index') }}" class="btn btn-lg btn-white"><i class="fa fa-list-ol fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Asset Tags') }}
          <p class="help-block">{{ trans('admin/settings/general.Incrementing and prefixes') }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.barcodes.index') }}" class="btn btn-lg btn-white"><i class="fa fa-barcode fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Barcodes') }}
          <p class="help-block">{{ trans('admin/settings/general.Barcode & QR settings') }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.labels.index') }}" class="btn btn-lg btn-white"><i class="fa fa-tags fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Labels') }}
          <p class="help-block">{{ trans('admin/settings/general.Label sizes & settings') }}</p>
        </div>
      </div>
    </div>


    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.ldap.index') }}" class="btn btn-lg btn-white"><i class="fa fa-sitemap fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.LDAP') }}
          <p class="help-block">{{ trans('admin/settings/general.LDAP/Active Directory') }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.backups.index') }}" class="btn btn-lg btn-white"><i class="fa fa-cloud-download fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Backups') }}
          <p class="help-block">{{ trans('admin/settings/general.Download files & Data') }}</p>
        </div>
      </div>
    </div>


    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-default">
        <div class="box-body text-center">
          <a href="{{ route('settings.oauth.index') }}" class="btn btn-lg btn-white"><i class="fa fa-user-secret fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.OAuth') }}
          <p class="help-block">{{ trans('admin/settings/general.Oauth Endpoint Settings') }}</p>
        </div>
      </div>
    </div>

    @if (config('app.debug')=== true)
      <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
        <div class="box box-default">
          <div class="box-body text-center">
            <a href="{{ route('settings.phpinfo.index') }}" class="btn btn-lg btn-white"><i class="fa fa-server fa-3x"></i></a>
            <br>
            {{ trans('admin/settings/general.PHP') }}
            <p class="help-block">{{ trans('admin/settings/general.PHP System Info') }}</p>
          </div>
        </div>
      </div>
    @endif

    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-danger">
        <div class="box-body text-center">
          <a href="{{ route('settings.purge.index') }}" class="btn btn-lg btn-white text-danger"><i class="fa fa-trash fa-3x"></i></a>
          <br>
          {{ trans('admin/settings/general.Purge') }}
          <p class="help-block">{{ trans('admin/settings/general.Purge Deleted Records') }}</p>
        </div>
      </div>
    </div>

  </div>










<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">{{ trans('admin/settings/general.system') }}</h3>
      </div>
      <div class="box-body">
        <div class="table-responsive">

          <table class="table table-striped">
            <tbody>
              <tr>
                <td class="col-md-4">{{ trans('admin/settings/general.snipe_version') }}</td>
                <td class="col-md-8">
                    {{ config('version.app_version') }}  build {{ config('version.build_version') }} ({{ config('version.hash_version') }})
                </td>
              </tr>
              <tr>
                <td>{{ trans('admin/settings/general.license') }}</td>
                <td>
                  <a href="https://www.gnu.org/licenses/agpl-3.0.en.html" rel="noopener">AGPL3</a>
                </td>
              </tr>
              <tr>
                <td>{{ trans('admin/settings/general.php') }}</td>
                <td> {{ phpversion() }}</td>
              </tr>
              <tr>
                <td>{{ trans('admin/settings/general.laravel') }}</td>
                <td>
                    {{ $snipeSettings->lar_ver() }}
                </td>
              </tr>




            </tbody>
          </table>
        </div>
      </div> <!-- /box-body-->
    </div> <!--/box-default-->
  </div><!--/col-md-8-->
</div><!--/row-->



@stop


