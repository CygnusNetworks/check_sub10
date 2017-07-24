#!/usr/bin/env python
# -*- coding: utf-8 -*-

from setuptools import setup

setup(name='check_sub10',
	version='0.24',
	description='Nagios Check for sub10 Systems Liberator E1000 ',
	author='Dr. Torge Szczepanek',
	author_email='info@cygnusnetworks.de',
	license='GPL',
	packages=['sub10_snmp'],
	scripts=['check_sub10', 'reboot_sub10'],
	install_requires=['configparser', 'nagiosplugin', 'pysnmp'])
