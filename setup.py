#!/usr/bin/env python
# -*- coding: utf-8 -*-

from setuptools import setup

setup(name='check_sub10_e1000',
	version='0.10',
	description='Nagios Check for sub10 Systems Liberator E1000 ',
	author='Dr. Torge Szczepanek',
	author_email='info@cygnusnetworks.de',
	license='GPL',
	packages=['sub10_e1000_snmp'],
	scripts=['check_sub10_e1000', 'reboot_sub10_e1000'],
	install_requires=['nagiosplugin', 'pysnmp'])
