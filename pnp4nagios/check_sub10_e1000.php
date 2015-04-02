<?php

$def[1] = '';
$def[2] = '';

for ($i=1; $i <= count($DS); $i++) {
  switch($NAME[$i]) {
    case 'modem_temp': $def[2] .= rrd::def($NAME[$i], $RRDFILE[1], $DS[$i]); break;
    default: $def[1] .= rrd::def($NAME[$i], $RRDFILE[1], $DS[$i]); break;
  }
}

$ds_name[1] = 'Power Statistics';
$opt[1] = "--upper-limit 7 --lower-limit \"-67\" --vertical-label \"dbm\"  --title $hostname";
$def[1] .= rrd::gradient("rx_power", "f0f0f0","21db2a", "RX Power");
$def[1] .= rrd::gprint("rx_power", "AVERAGE", "Average %5.1lf db");
$def[1] .= rrd::gprint("rx_power", "MAX", "Max %5.1lf db");
$def[1] .= rrd::gprint("rx_power", "LAST", "Last %5.1lf db\\n");

$def[1] .= rrd::gradient("tx_power", "f0f0f0", "0000b0","TX Power");
$def[1] .= rrd::gprint("tx_power", "AVERAGE", "Average %5.1lf db");
$def[1] .= rrd::gprint("tx_power", "MAX", "Max %5.1lf db");
$def[1] .= rrd::gprint("tx_power", "LAST", "Last %5.1lf db\\n");

$def[1] .= rrd::line3("vect_err", "#9121db", "Vect Err");
$def[1] .= rrd::gprint("vect_err", "AVERAGE", "Average %5.1lf db");
$def[1] .= rrd::gprint("vect_err", "MAX", "Max %5.1lf db");
$def[1] .= rrd::gprint("vect_err", "LAST", "Last %5.1lf db\\n");

$ds_name[2] = 'Modem Temperature';
$opt[2] = "--upper-limit 60 --lower-limit \"-10\" --vertical-label \"°C\"  --title $hostname";
$def[2] .= rrd::gradient("modem_temp", "ffff42", "ee7318", "Modem Temperature");
$def[2] .= rrd::gprint("modem_temp", "AVERAGE", "Average %5.1lf °C");
$def[2] .= rrd::gprint("modem_temp", "MAX", "Max %5.1lf °C");
$def[2] .= rrd::gprint("modem_temp", "LAST", "Last %5.1lf °C\\n");
?>