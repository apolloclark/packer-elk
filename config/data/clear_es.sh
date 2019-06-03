#!/bin/bash -eux

curl -s -XGET 'http://127.0.0.1:9200/_cat/indices?v'

service auditbeat stop
service filebeat stop
service metricbeat stop
service heartbeat-elastic stop
service packetbeat stop

curl -s -XDELETE 'http://127.0.0.1:9200/*beat-*/'
curl -s -XGET 'http://127.0.0.1:9200/_cat/indices?v'

sleep 30s
service elasticsearch restart
