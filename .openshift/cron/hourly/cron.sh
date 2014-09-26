#!/bin/bash
# 设定时区为上海
export TZ="Asia/Shanghai"
# 检测是否为凌晨5点
hour="`date +%H`"
if [ "$hour" = "05" ]
then
	php "${OPENSHIFT_REPO_DIR}acfun.php" || ( echo 'Cron task failed.' >&2 )
fi