## Nagios Check for Sub10 Systems Liberator E1000

This Nagios/Icinga Check provides the ability to query Sub10 Systems Liberator E1000 devices for status and parameters. It will output performance data to monitor reception quality and errors for tools like pnp4nagios. Implementation is in Python. You will need Python libraries pnp4nagios and pysnmp as dependencies.

You need to enable the SNMP Agent on the Sub10 device and set a SNMP Read community.

### Installation (manual using pip) on your Nagios Host
```
pip install nagiosplugin pysnmp
python setup.py install
ln -s /usr/bin/check_sub10_e1000 /usr/lib/nagios/plugins/check_sub10_e1000
```

### Usage example

```
./check_sub10_e1000 -H 1.2.3.4 -C public 
```

See check_sub10_e1000 -h for additional command line arguments. Use -vvv to get Debug Output including serial, terminal name, link name, firmware data and additional information.

### Nagios Integration

```
define command {
        command_name    check_sub10_e1000
        command_line    /usr/lib/nagios/plugins/check_sub10_e1000 -C $ARG1$ -H $HOSTADDRESS$
}
define service {
	use				          generic-service-perfdata
	hostgroup_name			sub10g
	service_description	check_sub10_e1000
	check_command			  check_sub10_e1000!SNMP_COMMUNITY
}
```
