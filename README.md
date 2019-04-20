# LZU CTF 2018 - Web 题目

## 0x00 web1

```
管理员懒得记密码，因此他的账户都挺简单的
```

考点：弱口令

使用说明：

* 修改 Flag：`web1/app/65cffec5ff5a1ddb69b2d36b51a55686.txt`
* 运行：`cd web1 && docker-compose up -d`

## 0x01 web2

```
这次管理员终于把密码改好了，看你还能不能登陆 (=￣ω￣=)
```

考点：SQL 注入

使用说明：

* 修改 Flag：`web2/app/3136b38330ee8dba21ca5a95aa2cd8b1.txt`
* 修改初始数据（可选）：`web2/mysql/initdb/init.sql`
* 运行：`cd web2 && docker-compose up -d`

## 0x02 web3

```
某开源项目
```

考点：信息泄露、git

使用说明：

* 修改 Flag：`web3/flag/1e081db078ee825ddcd227cf0e6aba0d.txt`，运行：`web3/flag/update.sh`
* 运行：`cd web3 && docker-compose up -d`

## 0x03 web4

```
某神秘组织的网盘
```

考点：竞争条件、信息泄露

使用说明：

* 修改 Flag：`web4/app/html/0139b64aba4b199a1eefe00cb298caa3.txt`
* 运行：`cd web4 && docker-compose up -d`

## 0x04 web5

```
某神秘组织的网站
```

考点：SSRF

使用说明：

* 修改 Flag：`web4/app/c4d126233e299bcaa298c323fc900938.txt`
* 运行：`cd web4 && docker-compose up -d`

## 参考资料

1. [https://github.com/micooz/docker-lnmp](https://github.com/micooz/docker-lnmp)
