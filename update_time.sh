#!/bin/bash
stat /var/lib/mysql/soundman_sound/button_status.ibd |grep Mod |awk '{print $3}' |cut -d. -f1
