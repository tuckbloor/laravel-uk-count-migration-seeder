<?php

use Illuminate\Database\Seeder;
use App\County;

class CountyTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //list of counties England,Scotland, Northern Ireland, Republic of Ireland And Wales
        //listed so you can remove any countries county quickly by the double spaces
        $counties = [
                  'Avon'  => 'England',
                  'Bedfordshire'  => 'England',
                  'Berkshire' => 'England',
                  'Buckinghamshire' => 'England',
                  'Cambridgeshire'  => 'England',
                  'Cheshire'  => 'England',
                  'Cleveland' => 'England',
                  'Cornwall'  => 'England',
                  'Cumbria' => 'England',
                  'Derbyshire'  => 'England',
                  'Devon' => 'England',
                  'Dorset'  => 'England',
                  'Durham'  => 'England',
                  'East Sussex' => 'England',
                  'Essex' => 'England',
                  'Gloucestershire' => 'England',
                  'Hampshire' => 'England',
                  'Herefordshire' => 'England',
                  'Isle of Wight' => 'England',
                  'Kent'  => 'England',
                  'Lancashire'  => 'England',
                  'Leicestershire'  => 'England',
                  'Lincolnshire'  => 'England',
                  'London'  => 'England',
                  'Merseyside'  => 'England',
                  'Middlesex' => 'England',
                  'Norfolk' => 'England',
                  'Northamptonshire'  => 'England',
                  'Northumberland'  => 'England',
                  'North Humberside'  => 'England',
                  'North Yorkshire' => 'England',
                  'Nottinghamshire' => 'England',
                  'Oxfordshire' => 'England',
                  'Rutland' => 'England',
                  'Shropshire'  => 'England',
                  'Somerset'  => 'England',
                  'South Humberside'  => 'England',
                  'South Yorkshire' => 'England',
                  'Staffordshire' => 'England',
                  'Suffolk' => 'England',
                  'Surrey'  => 'England',
                  'Tyne and Wear' => 'England',
                  'Warwickshire'  => 'England',
                  'West Midlands' => 'England',
                  'West Sussex' => 'England',
                  'West Yorkshire'  => 'England',
                  'Wiltshire' => 'England',
                  'Worcestershire'  => 'England',


                  'Clwyd' => 'Wales',
                  'Dyfed' => 'Wales',
                  'Gwent' => 'Wales',
                  'Gwynedd' => 'Wales',
                  'Mid Glamorgan' => 'Wales',
                  'Powys' => 'Wales',
                  'South Glamorgan' => 'Wales',
                  'West Glamorgan'  => 'Wales',

                  'Aberdeenshire' => 'Scotland',
                  'Angus' => 'Scotland',
                  'Argyll'  => 'Scotland',
                  'Ayrshire'  => 'Scotland',
                  'Banffshire'  => 'Scotland',
                  'Berwickshire'  => 'Scotland',
                  'Bute'  => 'Scotland',
                  'Caithness' => 'Scotland',
                  'Clackmannanshire'  => 'Scotland',
                  'Dumfriesshire' => 'Scotland',
                  'Dunbartonshire'  => 'Scotland',
                  'East Lothian'  => 'Scotland',
                  'Fife'  => 'Scotland',
                  'Inverness-shire' => 'Scotland',
                  'Kincardineshire' => 'Scotland',
                  'Kinross-shire' => 'Scotland',
                  'Kirkcudbrightshire'  => 'Scotland',
                  'Lanarkshire' => 'Scotland',
                  'Midlothian'  => 'Scotland',
                  'Moray' => 'Scotland',
                  'Nairnshire'  => 'Scotland',
                  'Orkney'  => 'Scotland',
                  'Peeblesshire'  => 'Scotland',
                  'Perthshire'  => 'Scotland',
                  'Renfrewshire'  => 'Scotland',
                  'Ross-shire'  => 'Scotland',
                  'Roxburghshire' => 'Scotland',
                  'Selkirkshire'  => 'Scotland',
                  'Shetland'  => 'Scotland',
                  'Stirlingshire' => 'Scotland',
                  'Sutherland'  => 'Scotland',
                  'West Lothian'  => 'Scotland',
                  'Wigtownshire'  => 'Scotland',


                  'Antrim'  => 'Northern Ireland',
                  'Armagh'  => 'Northern Ireland',
                  'Down'  => 'Northern Ireland',
                  'Fermanagh' => 'Northern Ireland',
                  'Londonderry' => 'Northern Ireland',
                  'Tyrone'  => 'Northern Ireland',


                  'Carlow' => 'Republic of Ireland',
                  'Cavan' => 'Republic of Ireland',
                  'Clare' => 'Republic of Ireland',
                  'Cork' => 'Republic of Ireland',
                  'Donegal' => 'Republic of Ireland',
                  'Dublin' => 'Republic of Ireland',
                  'Galway' => 'Republic of Ireland',
                  'Kerry' => 'Republic of Ireland',
                  'Kildare' => 'Republic of Ireland',
                  'Kilkenny' => 'Republic of Ireland',
                  'Laois' => 'Republic of Ireland',
                  'Leitrim' => 'Republic of Ireland',
                  'Limerick' => 'Republic of Ireland',
                  'Longford' => 'Republic of Ireland',
                  'Louth' => 'Republic of Ireland',
                  'Mayo' => 'Republic of Ireland',
                  'Meath' => 'Republic of Ireland',
                  'Monaghan' => 'Republic of Ireland',
                  'Offaly' => 'Republic of Ireland',
                  'Roscommon' => 'Republic of Ireland',
                  'Sligo' => 'Republic of Ireland',
                  'Tipperary' => 'Republic of Ireland',
                  'Waterford' => 'Republic of Ireland',
                  'Westmeath' => 'Republic of Ireland',
                  'Wexford' => 'Republic of Ireland',
                  'Wicklow' => 'Republic of Ireland'

        ];

        //un-comment below if you would like sorting to be by county not country, county
        //ksort($counties);

        foreach($counties as $county => $country) {
            County::create([
                    'county' => $county,
                    'country' => $country
            ]);
        }
    }
}
