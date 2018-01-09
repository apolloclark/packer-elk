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
# change line 6 in build_packer_virtualbox.sh to a folder with an Ubuntu 16.04 ISO
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
- [apolloclark.elasticsearch](https://github.com/apolloclark/ansible-role-elasticsearch)
- [apolloclark.kibana](https://github.com/apolloclark/ansible-role-kibana)
