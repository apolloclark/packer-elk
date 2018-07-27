# packer-aws-elk

Packer based project for provisioning an "ELK" image using Ansible remote, 
and Serverspc, for AWS, or Virtualbox, with Elastic monitoring.

## Requirements

To use this project, you must have installed:
- [Packer](https://www.packer.io/downloads.html)
- [Ansible](http://docs.ansible.com/ansible/latest/intro_installation.html)
- [Serverspec](http://serverspec.org/)
- [AWS CLI](https://docs.aws.amazon.com/cli/latest/userguide/installing.html)
- [jq](https://stedolan.github.io/jq/)

(Optional)
- [Virtualbox](https://www.virtualbox.org/wiki/Downloads)
- [Vagrant](https://www.vagrantup.com/downloads.html)

## Deploy to AWS, with Packer
```shell
git clone https://github.com/apolloclark/packer-aws-elk
cd packer-aws-elk
# create a keypair named "packer" or change lines 26, 27 in build_packer_aws.sh
./build_packer_aws.sh
```

## Deploy Locally, with Vagrant
```shell
git clone https://github.com/apolloclark/packer-aws-elk
cd packer-aws-elk
vagrant up
vagrant ssh
```

## Ansible

Ansible Roles:
- [geerlingguy.firewall](https://github.com/geerlingguy/ansible-role-firewall)
- [apolloclark.osquery](https://github.com/apolloclark/ansible-role-osquery)
- [apolloclark.filebeat](https://github.com/apolloclark/ansible-role-filebeat)
- [apolloclark.metricbeat](https://github.com/apolloclark/ansible-role-metricbeat)
- [apolloclark.heartbeat](https://github.com/apolloclark/ansible-role-heartbeat)
- [apolloclark.packetbeat](https://github.com/apolloclark/ansible-role-packetbeat)
- [apolloclark.auditbeat](https://github.com/apolloclark/ansible-role-auditbeat)
- [apolloclark.logstash](https://github.com/apolloclark/ansible-role-logstash)
- [apolloclark.elasticsearch](https://github.com/apolloclark/ansible-role-elasticsearch)
- [apolloclark.kibana](https://github.com/apolloclark/ansible-role-kibana)
<br/><br/><br/>



## Log Files

*authlog*
```
nano /var/log/auth.log
```

*apache*
```
service apache2 status | cat
nano /var/log/apache2/access.log
nano /var/log/apache2/audit.log
nano /var/log/apache2/error.log
```

*mysql*
```
nano /var/log/mysql/audit.log
```

*osquery*
```
nano /var/log/osquery/osqueryd.results.log
nano /var/log/osquery/osqueryd.INFO
nano /var/log/osquery/osqueryd.WARNING
```

*Filebeat*
```
service filebeat status | cat
/usr/share/filebeat/bin/filebeat version
nano /etc/filebeat/filebeat.yml
nano /var/log/filebeat/filebeat.log
tail -f /var/log/filebeat/filebeat.log
```

*Metricbeat*
```
service metricbeat status | cat
/usr/share/metricbeat/bin/metricbeat version
nano /etc/metricbeat/metricbeat.yml
nano /var/log/metricbeat/metricbeat.log
```

*Heartbeat*
```
service heartbeat status | cat
/usr/share/heartbeat/bin/heartbeat version
nano /etc/heartbeat/heartbeat.yml
nano /var/log/heartbeat/heartbeat.log
tail -f /var/log/heartbeat/heartbeat.log
```

*Packetbeat*
```
service packetbeat status | cat
/usr/share/heartbeat/bin/heartbeat version
nano /etc/heartbeat/heartbeat.yml
nano /var/log/heartbeat/heartbeat.log
tail -f /var/log/heartbeat/heartbeat.log
```

*Auditbeat*
```
service auditbeat status | cat
/usr/share/auditbeat/bin/auditbeat version
nano /etc/auditbeat/auditbeat.yml
nano /var/log/auditbeat/auditbeat
tail -f /var/log/auditbeat/auditbeat
```

*Logstash*
```
service logstash status | cat
/usr/share/logstash/bin/logstash --version
nano /etc/logstash/logstash.yml
nano /var/log/logstash/logstash-plain.log
tail -f /var/log/logstash/logstash-plain.log
```

*Elasticsearch*
```
# Elasticsearch 5.x cheat sheet
# https://gist.github.com/apolloclark/c9eb0c1a01798ac2e48492ceeb367a4f

service elasticsearch status
/usr/share/elasticsearch/bin/elasticsearch --version
nano /etc/elasticsearch/elasticsearch.yml
nano /var/log/elasticsearch/elasticsearch.log
tail -f /var/log/elasticsearch/elasticsearch.log

# list indices
curl -XGET 'http://127.0.0.1:9200/_cat/indices?v'
```

*Kibana*
```
service kibana status
/usr/share/kibana/bin/kibana --version
nano /etc/kibana/kibana.yml
nano /var/log/kibana/kibana.log
```