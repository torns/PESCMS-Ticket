<div class="am-panel am-panel-default">
    <div class="am-panel-hd">邮件通知</div>
    <div class="am-panel-bd">
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">邮箱账号<i class="am-text-danger">*</i></label>
                    <input name="mail[account]" placeholder="" type="text" value="<?= $mail['account']; ?>">
                </div>
            </div>
        </div>

        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">邮箱密码<i class="am-text-danger">*</i></label>
                    <input name="mail[passwd]" placeholder="" type="password" value="<?= $mail['passwd']; ?>">
                </div>
            </div>
        </div>

        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">SMTP地址<i class="am-text-danger">*</i></label>
                    <input name="mail[address]" placeholder="" type="text" value="<?= $mail['address']; ?>">
                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 不需要添加http://或者https://前缀。常见的邮件服务商smtp地址：<a href="https://www.pescms.com/d/v/1.0/10/56.html#%E5%B8%B8%E8%A7%81%E9%82%AE%E4%BB%B6%E6%9C%8D%E5%8A%A1%E5%95%86%E5%9C%B0%E5%9D%80" target="_blank" style="color: blue">查看</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">SMTP端口<i class="am-text-danger">*</i></label>
                    <input name="mail[port]" placeholder="" type="text" value="<?= $mail['port']; ?>">
                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 一般填写25端口，加密端口请填写587。具体发送端口，请参考您的邮件服务提供商文档。
                    </div>
                </div>
            </div>
        </div>

        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">邮件发送名称<i class="am-text-danger">*</i></label>
                    <input name="mail[formname]" placeholder="" type="text" value="<?= empty($mail['formname']) ? 'system' : $mail['formname']; ?>">
                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 用户查收邮件时看到的发送人名称，默认为system。
                    </div>
                </div>
            </div>
        </div>

        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">邮件发送测试</label>
                    <input type="email" class="test_email am-inline" style="width: 20%">
                    <a href="javascript:;" data="<?= $label->url(GROUP.'-Setting-emailTest') ?>" type="submit" class="am-inline am-btn am-btn-warning email-test" >发送测试邮件</a>
                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 请先保存邮件smtp的设置，再进行邮件发送测试。
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>